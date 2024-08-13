@props([
    'entity'            => null,
    'entityControlName' => null,
])

<!-- Mail Button -->
<div class="">
    <button
        class="flex h-[74px] w-[84px] flex-col items-center justify-center gap-1 rounded-lg border border-transparent bg-green-200 text-green-900 transition-all hover:border-green-400"
        @click="$refs.mailActionComponent.openModal('mail')"
    >
        <span class="icon-mail text-2xl"></span>

        @lang('admin::app.components.activities.actions.mail.btn')
    </button>

    <!-- Mail Activity Action Vue Component -->
    <v-mail-activity
        ref="mailActionComponent"
        :entity="{{ json_encode($entity) }}"
        entity-control-name="{{ $entityControlName }}"
    ></v-mail-activity>
</div>

@pushOnce('scripts')
    <script type="text/x-template" id="v-mail-activity-template">
        <x-admin::form
            v-slot="{ meta, errors, handleSubmit }"
            enctype="multipart/form-data"
            as="div"
        >
            <form
                @submit="handleSubmit($event, save)"
                ref="mailActionForm"
            >
                <x-admin::modal ref="mailActivityModal" position="bottom-right">
                    <x-slot:header>
                        <h3 class="text-base font-semibold">
                            @lang('admin::app.components.activities.actions.mail.title')
                        </h3>
                    </x-slot>

                    <x-slot:content>
                        <!-- Activity Type -->
                        <x-admin::form.control-group.control
                            type="hidden"
                            name="type"
                            value="email"
                        />
                        
                        <!-- Id -->
                        <x-admin::form.control-group.control
                            type="hidden"
                            ::name="entityControlName"
                            ::value="entity.id"
                        />
                        
                        <!-- To -->
                        <x-admin::form.control-group>
                            <x-admin::form.control-group.label class="required">
                                @lang('admin::app.components.activities.actions.mail.to')
                            </x-admin::form.control-group.label>

                            <div class="relative">
                                <x-admin::form.control-group.control
                                    type="tags"
                                    name="reply_to"
                                    rules="required"
                                    input-rules="email"
                                    :label="trans('admin::app.components.activities.actions.mail.to')"
                                    :placeholder="trans('admin::app.components.activities.actions.mail.enter-emails')"
                                />

                                <div class="absolute right-2 top-[9px] flex items-center gap-2">
                                    <span
                                        class="cursor-pointer font-medium hover:underline"
                                        @click="showCC = ! showCC"
                                    >
                                        @lang('admin::app.components.activities.actions.mail.cc')
                                    </span>

                                    <span
                                        class="cursor-pointer font-medium hover:underline"
                                        @click="showBCC = ! showBCC"
                                    >
                                        @lang('admin::app.components.activities.actions.mail.bcc')
                                    </span>
                                </div>
                            </div>

                            <x-admin::form.control-group.error control-name="reply_to" />
                        </x-admin::form.control-group>

                        <template v-if="showCC">
                            <!-- Cc -->
                            <x-admin::form.control-group>
                                <x-admin::form.control-group.label>
                                    @lang('admin::app.components.activities.actions.mail.cc')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="tags"
                                    name="cc"
                                    input-rules="email"
                                    :label="trans('admin::app.components.activities.actions.mail.cc')"
                                    :placeholder="trans('admin::app.components.activities.actions.mail.enter-emails')"
                                />

                                <x-admin::form.control-group.error control-name="cc" />
                            </x-admin::form.control-group>
                        </template>

                        <template v-if="showBCC">
                            <!-- Cc -->
                            <x-admin::form.control-group>
                                <x-admin::form.control-group.label>
                                    @lang('admin::app.components.activities.actions.mail.bcc')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="tags"
                                    name="bcc"
                                    input-rules="email"
                                    :label="trans('admin::app.components.activities.actions.mail.bcc')"
                                    :placeholder="trans('admin::app.components.activities.actions.mail.enter-emails')"
                                />

                                <x-admin::form.control-group.error control-name="bcc" />
                            </x-admin::form.control-group>
                        </template>

                        <!-- Subject -->
                        <x-admin::form.control-group>
                            <x-admin::form.control-group.label class="required">
                                @lang('admin::app.components.activities.actions.mail.subject')
                            </x-admin::form.control-group.label>

                            <x-admin::form.control-group.control
                                type="text"
                                id="subject"
                                name="subject"
                                rules="required"
                                :label="trans('admin::app.components.activities.actions.mail.subject')"
                                :placeholder="trans('admin::app.components.activities.actions.mail.subject')"
                            />

                            <x-admin::form.control-group.error control-name="subject" />
                        </x-admin::form.control-group>

                        <!-- Content -->
                        <x-admin::form.control-group>
                            <x-admin::form.control-group.control
                                type="textarea"
                                name="reply"
                                id="reply"
                                rules="required"
                                {{-- tinymce="true" --}}
                                :label="trans('admin::app.components.activities.actions.mail.message')"
                            />

                            <x-admin::form.control-group.error control-name="reply" />
                        </x-admin::form.control-group>

                        <!-- Attachments -->
                        <x-admin::form.control-group class="!mb-0">
                            <x-admin::attachments
                                allow-multiple="true"
                                hide-button="true"
                            />
                        </x-admin::form.control-group>
                    </x-slot>

                    <x-slot:footer>
                        <div class="flex w-full items-center justify-between">
                            <label
                                class="icon-attachment cursor-pointer rounded-md p-1 text-2xl transition-all hover:bg-gray-200"
                                for="file-upload"
                            ></label>

                            <x-admin::button
                                class="primary-button"
                                :title="trans('admin::app.components.activities.actions.mail.send-btn')"
                                ::loading="isStoring"
                                ::disabled="isStoring"
                            />
                        </div>
                    </x-slot>
                </x-admin::modal>
            </form>
        </x-admin::form>
    </script>

    <script type="module">
        app.component('v-mail-activity', {
            template: '#v-mail-activity-template',

            props: {
                entity: {
                    type: Object,
                    required: true,
                    default: () => {}
                },

                entityControlName: {
                    type: String,
                    required: true,
                    default: ''
                }
            },

            data() {
                return {
                    showCC: false,

                    showBCC: false,

                    isStoring: false,
                }
            },

            methods: {
                openModal(type) {
                    this.$refs.mailActivityModal.open();
                },

                save(params, { resetForm, setErrors  }) {
                    let formData = new FormData(this.$refs.mailActionForm);

                    let self = this;

                    this.$axios.post("{{ route('admin.leads.emails.store', 'replaceLeadId') }}".replace('replaceLeadId', this.entity.id), formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        })
                        .then (function(response) {
                            self.isStoring = false;

                            self.$emitter.emit('add-flash', { type: 'success', message: response.data.message });

                            self.$emitter.emit('on-activity-added', response.data.data);

                            self.$refs.mailActivityModal.close();
                        })
                        .catch (function (error) {
                            self.isStoring = false;

                            if (error.response.status == 422) {
                                setErrors(error.response.data.errors);
                            } else {
                                self.$emitter.emit('add-flash', { type: 'error', message: error.response.data.message });

                                self.$refs.mailActivityModal.close();
                            }
                        });
                },
            },
        });
    </script>
@endPushOnce