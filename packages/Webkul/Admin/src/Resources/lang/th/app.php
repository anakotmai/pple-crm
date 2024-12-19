<?php

return [
    'acl' => [
        'leads'           => 'ลูกค้าเป้าหมาย',
        'lead'            => 'ลูกค้าเป้าหมาย',
        'quotes'          => 'ใบเสนอราคา',
        'mail'            => 'อีเมล',
        'inbox'           => 'จดหมายขาเข้า',
        'draft'           => 'ฉบับร่าง',
        'outbox'          => 'จดหมายขาออก',
        'sent'            => 'ส่ง',
        'trash'           => 'ถังขยะ',
        'activities'      => 'กิจกรรม',
        'webhook'         => 'ตัวส่งสัญญาณแบบอัตโนมัติ (webhook)',
        'contacts'        => 'รายชื่อผู้ติดต่อ',
        'persons'         => 'บุคคล,ผู้ติด่อ',
        'organizations'   => 'องค์กร',
        'products'        => 'สินค้า',
        'settings'        => 'การตั้งค่า',
        'groups'          => 'กลุ่ม',
        'roles'           => '[บทบาท]',
        'users'           => 'ผู้ใช้งาน',
        'user'            => 'ผู้ใช้งาน',
        'automation'      => 'การทำงานอัตโนมัติ',
        'attributes'      => 'คุณลักษณะเฉพาะ',
        'pipelines'       => 'ขั้นตอน',
        'sources'         => 'แหล่งที่มาของข้อมูล',
        'types'           => 'ประเภท',
        'email-templates' => 'รูปแบบของอีเมลที่ถูกสร้างไว้ล่วงหน้า',
        'workflows'       => 'ขั้นตอนการทำงานอัตโนมัติที่กำหนดไว้ล่วงหน้า',
        'other-settings'  => 'การตั้งค่าอื่นๆ เพิ่มเติม',
        'tags'            => 'ป้ายกำกับ',
        'configuration'   => 'การกำหนดค่า',
        'create'          => 'สร้าง',
        'edit'            => 'แก้ไข',
        'view'            => 'ดู',
        'print'           => 'พิมพ์',
        'delete'          => 'ลบ',
        'export'          => 'ส่งออก',
        'mass-delete'     => 'ฟังก์ชันการลบข้อมูลจำนวนมาก',
    ],

    'users' => [
        'activate-warning' => 'เปิดใช้งานการแจ้งเตือน',
        'login-error'      => 'เข้าสู่ระบบไม่สำเร็จ',

        'login' => [
            'email'                => 'อีเมล',
            'forget-password-link' => 'ลิงก์สำหรับรีเซ็ตรหัสผ่าน',
            'password'             => 'รหัสผ่าน',
            'submit-btn'           => 'ล็อคอิน',
            'title'                => 'ล็อคอิน',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'อีเมลที่ลงทะเบียนไว้',
                'email-not-exist' => 'ไม่พบอีเมล',
                'page-title'      => 'ลืมรหัสผ่าน',
                'reset-link-sent' => 'ลิงก์รีเซ็ตรหัสผ่านถูกส่งไปแล้ว',
                'sign-in-link'    => 'ย้อนกลับไปหน้าเข้าสู่ระบบ',
                'submit-btn'      => 'รีเซ็ต',
                'title'           => 'กู้คืนรหัสผ่าน',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'ย้อนกลับไปหน้าเข้าสู่ระบบ',
            'confirm-password' => 'ยืนยันรหัสผ่าน',
            'email'            => 'อีเมลที่ลงทะเบียนไว้',
            'password'         => 'รหัสผ่าน',
            'submit-btn'       => 'รีเซ็ตรหัสผ่าน',
            'title'            => 'รีเซ็ตรหัสผ่าน',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'ย้อนกลับ',
            'change-password'   => 'เปลี่ยนรหัสผ่าน',
            'confirm-password'  => 'ยืนยันรหัสผ่าน',
            'current-password'  => 'รหัสผ่านปัจจุบัน',
            'email'             => 'อีเมล',
            'general'           => 'ทั่วไป',
            'invalid-password'  => 'รหัสผ่านไม่ถูกต้อง',
            'name'              => 'ชื่อ',
            'password'          => 'รหัสผ่าน',
            'profile-image'     => 'รูปโปรไฟล์',
            'save-btn'          => 'บันทึกบัญชีผู้ใช้',
            'title'             => 'บัญชีของฉัน',
            'update-success'    => 'บัญชีผู้ใช้ได้รับการอัปเดตเรียบร้อยแล้ว',
            'upload-image-info' => 'อัปโหลดรูปโปรไฟล์ (ขนาด 110px x 110px) ในรูปแบบ PNG หรือ JPG',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'อีเมล',
                    'title'        => 'สร้างอีเมลใหม่',
                    'to'           => 'ถึง',
                    'enter-emails' => 'กด Enter เพื่อเพิ่มอีเมล',
                    'cc'           => 'สำเนาถึง',
                    'bcc'          => 'สำเนาลับถึง',
                    'subject'      => 'หัวเรื่อง',
                    'send-btn'     => 'ส่ง',
                    'message'      => 'ข้อความ',
                ],

                'file' => [
                    'btn'           => 'ไฟล์',
                    'title'         => 'เพิ่มไฟล์',
                    'title-control' => 'หัวข้อ',
                    'name'          => 'ชื่อ',
                    'description'   => 'คำอธิบาย',
                    'file'          => 'ไฟล์',
                    'save-btn'      => 'บันทึกไฟล์',
                ],

                'note' => [
                    'btn'      => 'บันทึก',
                    'title'    => 'เพิ่มไฟล์',
                    'comment'  => 'ความคิดเห็น',
                    'save-btn' => 'บันทึก',
                ],

                'activity' => [
                    'btn'           => 'กิจกรรม',
                    'title'         => 'เพิ่มกิจกรรม',
                    'title-control' => 'หัวข้อ',
                    'description'   => 'คำอธิบาย',
                    'schedule-from' => 'เวลาเริ่มต้น',
                    'schedule-to'   => 'เวลาสิ้นสุด',
                    'location'      => 'สถานที่',
                    'call'          => 'โทร',
                    'meeting'       => 'ประชุม',
                    'lunch'         => 'นัดตอนกินข้าวเที่ยง',
                    'save-btn'      => 'บันทึกกิจกรรม',

                    'participants' => [
                        'title'       => 'ผู้เข้าร่วม',
                        'placeholder' => 'พิมพ์เพื่อค้นหาผู้เข้าร่วม',
                        'users'       => 'ผู้ใช้งาน',
                        'persons'     => 'บุคคล',
                        'no-results'  => 'ไม่พบข้อมูล',
                    ],
                ],
            ],

            'index' => [
                'from'         => 'จาก',
                'to'           => 'ถึง',
                'cc'           => 'สำเนาถึง',
                'bcc'          => 'สำเนาลับถึง',
                'all'          => 'ทั้งหมด',
                'planned'      => 'แผนงาน',
                'calls'        => 'โทร',
                'meetings'     => 'การประชุม',
                'lunches'      => 'นัดตอนกินข้าวเที่ยง',
                'files'        => 'ไฟล์',
                'quotes'       => 'ใบเสนอราคา',
                'notes'        => 'บันทึก',
                'emails'       => 'อีเมล',
                'change-log'   => 'ประวัติการเปลี่ยนแปลง',
                'by-user'      => 'โดย :user',
                'scheduled-on' => 'กำหนดเวลา',
                'location'     => 'สถานที่',
                'participants' => 'ผู้เข้าร่วม',
                'mark-as-done' => 'ทำเครื่องหมายว่าเสร็จสิ้น',
                'delete'       => 'ลบ',
                'edit'         => 'แก้ไข',
                'view'         => 'ดู',
                'unlink'       => 'ยกเลิกการเชื่อมโยง',
                'empty'        => 'ว่างเปล่า',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'ไม่พบกิจกรรม',
                        'description' => 'ไม่พบกิจกรรม คุณสามารถเพิ่มกิจกรรมโดยกดปุ่มข้างบนด้านซ้าย',
                    ],

                    'planned' => [
                        'title'       => 'ไม่พบกิจกรรมd',
                        'description' => 'ไม่พบกิจกรรม คุณสามารถเพิ่มกิจกรรมโดยกดปุ่มข้างบนด้านซ้าย',
                    ],

                    'notes' => [
                        'title'       => 'ไม่พบบันทึก',
                        'description' => 'ไม่พบบันทึก คุณสามารถเพิ่มบันทึกโดยกดปุ่มข้างบนด้านซ้าย',
                    ],

                    'calls' => [
                        'title'       => 'ไม่พบการโทร',
                        'description' => 'ไม่พบการโทร คุณสามารถเพิ่มการโทรโดยกดปุ่มข้างบนด้านซ้าย',
                    ],

                    'meetings' => [
                        'title'       => 'ไม่พบการประชุม',
                        'description' => 'ไม่พบการประชุม คุณสามารถเพิ่มการประชุมโดยกดปุ่มข้างบนด้านซ้าย',
                    ],

                    'lunches' => [
                        'title'       => 'ไม่พบรายการดังกล่าว',
                        'description' => 'ไม่พบรายการดังกล่าว คุณสามารถเพิ่มรายการใหม่โดยกดปุ่มข้างบนด้านซ้าย',
                    ],

                    'files' => [
                        'title'       => 'ไม่พบไฟล์',
                        'description' => 'ไม่พบไฟล์ คุณสามารถเพิ่มกิจกรรมโดยกดปุ่มข้างบนด้านซ้าย',
                    ],

                    'emails' => [
                        'title'       => 'ไม่พบอีเมล',
                        'description' => 'ไม่พบอีเมล คุณสามารถเพิ่มอีเมลโดยกดปุ่มข้างบนด้านซ้าย',
                    ],

                    'system' => [
                        'title'       => 'ไม่พบประวัติการเปลี่ยนแปลง',
                        'description' => 'ไม่พบบันทึกการเปลี่ยนแปลงสำหรับสิ่งนี้',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'เพิ่มรูปภาพ',
                'ai-add-image-btn'  => 'รูปภาพจาก AI',
                'allowed-types'     => 'ไฟล์ภาพ png, jpeg, jpg',
                'not-allowed-error' => 'อนุญาตเฉพาะไฟล์รูปภาพ (.jpeg, .jpg, .png, ...) เท่านั้น',

                'placeholders' => [
                    'front'     => 'ก่อนหน้า',
                    'next'      => 'ต่อไป',
                    'size'      => 'ขนาด',
                    'use-cases' => 'กรณีตัวอย่าง',
                    'zoom'      => 'ขยาย',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'เพิ่มวีดีโอ',
                'allowed-types'     => 'เฉพาะไฟล์วีดีโอ mp4, webm, mkv',
                'not-allowed-error' => 'อนุญาตเฉพาะไฟล์วิดีโอ (.mp4, .mov, .ogg, ...) เท่านั้น',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'ไม่มีรายการที่เลือก',
                'must-select-a-mass-action-option' => 'คุณต้องเลือกการดำเนินการแบบกลุ่ม',
                'must-select-a-mass-action'        => 'คุณต้องเลือกการดำเนินการแบบกลุ่ม',
            ],

            'toolbar' => [
                'length-of' => ':length จาก',
                'of'        => 'ของ',
                'per-page'  => 'ต่อหน้า',
                'results'   => ':total รายการ',
                'delete'    => 'ลบ',
                'selected'  => ':total รายการที่เลือก',

                'mass-actions' => [
                    'submit'        => 'ส่ง',
                    'select-option' => 'เลือกตัวเลือก',
                    'select-action' => 'เลือกการดำเนินการ',
                ],

                'filter' => [
                    'apply-filters-btn' => 'ใช้ตัวกรอง',
                    'back-btn'          => 'ย้อนกลับ',
                    'create-new-filter' => 'สร้างตัวกรองใหม่',
                    'custom-filters'    => 'สร้างตัวกรองใหม่ด้วยตัวเอง',
                    'delete-error'      => 'เกิดข้อผิดพลาดขณะลบตัวกรอง โปรดลองอีกครั้ง',
                    'delete-success'    => 'ตัวกรองถูกลบเรียบร้อยแล้ว',
                    'empty-description' => 'ไม่มีตัวกรองที่เลือกไว้เพื่อบันทึก โปรดเลือกตัวกรองเพื่อบันทึก',
                    'empty-title'       => 'เพิ่มตัวกรองเพื่อบันทึก',
                    'name'              => 'ชื่อ',
                    'quick-filters'     => 'ตัวกรองด่วน',
                    'save-btn'          => 'บันทึก',
                    'save-filter'       => 'บันทึกตัวกรอง',
                    'saved-success'     => 'ตัวกรองถูกบันทึกเรียบร้อยแล้ว',
                    'selected-filters'  => 'ตัวกรองที่เลือก',
                    'title'             => 'ตัวกรอง',
                    'update'            => 'อัปเดต',
                    'update-filter'     => 'อัปเดตตัวกรอง',
                    'updated-success'   => 'ตัวกรองได้รับการอัปเดตเรียบร้อยแล้ว',
                ],

                'search' => [
                    'title' => 'ค้นหา',
                ],
            ],

            'filters' => [
                'select' => 'เลือก',
                'title'  => 'ตัวกรอง',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'พิมพ์อย่างน้อย 2 ตัวอักษร...',
                        'no-results'         => 'ไม่พบผลลัพธ์...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'ลบทั้งหมด',
                    'title'     => 'ตัวกรองแบบกำหนดเอง',
                ],

                'boolean-options' => [
                    'false' => 'เท็จ',
                    'true'  => 'จริง',
                ],

                'date-options' => [
                    'last-month'        => 'เดือนที่แล้ว',
                    'last-six-months'   => '6 เดือนที่แล้ว',
                    'last-three-months' => '3 เดือนที่แล้ว',
                    'this-month'        => 'เดือนนี้',
                    'this-week'         => 'สัปดาห์นี',
                    'this-year'         => 'ปีนี้',
                    'today'             => 'วันนี้',
                    'yesterday'         => 'เมื่อวาน',
                ],
            ],

            'table' => [
                'actions'              => 'การดำเนินการ',
                'no-records-available' => 'ไม่พบข้อมูล',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => 'เห็นด้วย',
                'disagree-btn' => 'ไม่เห็นด้วย',
                'message'      => 'คุณแน่ใจหรือไม่ว่าต้องการดำเนินการนี้?',
                'title'        => 'คุณแน่ใจหรือไม่?',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'แท็ก',
                'added-tags'     => 'เพิ่มแท็ก',
                'save-btn'       => 'บันทึกแท็ก',
                'placeholder'    => 'พิมพ์เพื่อค้นหาแท็ก',
                'add-tag'        => 'เพิ่ม \":term\"...',
                'aquarelle-red'  => 'โอกาสปิดการขายสูง',
                'crushed-cashew' => 'ยอดนิยม',
                'beeswax'        => 'ยืนยันแล้ว',
                'lemon-chiffon'  => 'มีศักยภาพ',
                'snow-flurry'    => 'กำลังดำเนินการ',
                'honeydew'       => 'โครงการเพื่อสังคม',
            ],
        ],

        'layouts' => [
            'header' => [
                'mega-search' => [
                    'title'   => 'ค้นหา',

                    'tabs' => [
                        'leads'    => 'กลุ่มเป้าหมาย',
                        'quotes'   => 'ใบเสนอราคา',
                        'persons'  => 'บุคคล',
                        'products' => 'ผลิตภัณฑ์',
                    ],

                    'explore-all-products'          => 'สำสำรวจผลิตภัณฑ์ทั้งหมด',
                    'explore-all-leads'             => 'สำรวจกลุ่มเป้าหมายทั้งหมด',
                    'explore-all-contacts'          => 'สำรวจผู้ติดต่อทั้งหมด',
                    'explore-all-quotes'            => 'สำรวจใบเสนอราคาทั้งหมด',
                    'explore-all-matching-products' => 'สำรวจผลิตภัณฑ์ที่ตรงกับคำค้นหา ":query" (:count)',
                    'explore-all-matching-leads'    => 'สำรวจลูกค้าเป้าหมายที่ตรงกับคำค้นหา ":query" (:count)',
                    'explore-all-matching-contacts' => 'สำรวจผู้ติดต่อที่ตรงกับคำค้นหา ":query" (:count)',
                    'explore-all-matching-quotes'   => 'สำรวจใบเสนอราคาที่ตรงกับคำค้นหา ":query" (:count)',
                ],
            ],
        ],

        'attributes' => [
            'lookup' => [
                'click-to-add'    => 'คลิ๊กเพื่อเพิ่ม',
                'search'          => 'ค้นหา',
                'no-result-found' => 'ไม่พบผลลัพธ์',
                'search'          => 'ค้นหา...',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'คลิกเพื่อเพิ่ม',
            'no-results'   => 'ไม่พบผลลัพธ์',
            'add-as-new'   => 'สร้างรายการใหม่',
            'search'       => 'ค้นหา...',
        ],

        'flash-group' => [
            'success' => 'เสร็จสมบูรณ์',
            'error'   => 'พบข้อผิดพลาด',
            'warning' => 'คำเตือน',
            'info'    => 'ข้อมูล',
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'ใบเสนอราคา',
            'create-btn'     => 'สร้างใบเสนอราคา',
            'create-success' => 'สร้างใบเสนอราคาสำเร็จ.',
            'update-success' => 'อัปเดตใบเสนอราคาสำเร็จ.',
            'delete-success' => 'ลบใบเสนอราคาสำเร็จ.',
            'delete-failed'  => 'ไม่สามารถลบใบเสนอราคาได้.',

            'datagrid' => [
                'subject'        => 'เรื่อง',
                'sales-person'   => 'ผู้ขาย',
                'expired-at'     => 'หมดอายุ',
                'created-at'     => 'สร้างเมื่อ',
                'expired-quotes' => 'ใบเสนอราคาหมดอายุ',
                'person'         => 'บุคคล',
                'subtotal'       => 'ยอดรวมย่อย',
                'discount'       => 'ส่วนลด',
                'tax'            => 'ภาษี',
                'adjustment'     => 'การปรับปรุง',
                'grand-total'    => 'ยอดรวมทั้งหมด',
                'edit'           => 'แก้ไข',
                'delete'         => 'ลบ',
                'print'          => 'พิมพ์',
            ],

            'pdf' => [
                'title'            => 'ใบเสนอราคา',
                'grand-total'      => 'ยอดรวมทั้งหมด',
                'adjustment'       => 'การปรับปรุง',
                'discount'         => 'ส่วนลด',
                'tax'              => 'ภาษี',
                'sub-total'        => 'ยอดรวมย่อย',
                'amount'           => 'จำนวนเงิน',
                'quantity'         => 'ปริมาณ',
                'price'            => 'ราคา',
                'product-name'     => 'ชื่อผลิตภัณฑ์',
                'sku'              => 'รหัสสินค้า',
                'shipping-address' => 'ที่อยู่จัดส่ง',
                'billing-address'  => 'ที่อยู่ในการเรียกเก็บเงิน',
                'expired-at'       => 'หมดอายุ',
                'sales-person'     => 'ผู้ขาย',
                'date'             => 'วันที่',
                'quote-id'         => 'เลขที่ใบเสนอราคา',
            ],
        ],

        'create' => [
            'title'             => 'สร้างใบเสนอราคา',
            'save-btn'          => 'บันทึกใบเสนอราคา',
            'quote-info'        => 'ข้อมูลใบเสนอราคา',
            'quote-info-info'   => 'กรอกข้อมูลพื้นฐานของใบเสนอราคา',
            'address-info'      => 'ข้อมูลที่อยู่',
            'address-info-info' => 'ข้อมูลเกี่ยวกับที่อยู่ที่เกี่ยวข้องกับใบเสนอราคา',
            'quote-items'       => 'รายการสินค้าในใบเสนอราคา',
            'search-products'   => 'ค้นหาสินค้น',
            'link-to-lead'      => 'เชื่อมโยงกับกลุ่มเป้าหมาย',
            'quote-item-info'   => 'เพิ่มคำขอผลิตภัณฑ์สำหรับใบเสนอราคานี้',
            'quote-name'        => 'ชื่อใบเสนอราคา',
            'quantity'          => 'จำนวน',
            'price'             => 'ราคา',
            'discount'          => 'ส่วนลด',
            'tax'               => 'ภาษี',
            'total'             => 'รวม',
            'amount'            => 'จำนวน',
            'add-item'          => 'เพิ่มรายการ',
            'sub-total'         => 'ยอดรวมย่อย (:symbol)',
            'total-discount'    => 'ส่วนลด (:symbol)',
            'total-tax'         => 'ภาษี (:symbol)',
            'total-adjustment'  => 'การปรับปรุงยอด (:symbol)',
            'grand-total'       => 'ยอดรวมทั้งหมด (:symbol)',
            'discount-amount'   => 'จำนวนส่วนลด',
            'tax-amount'        => 'จำนวนภาษี',
            'adjustment-amount' => 'จำนวนการปรับปรุง',
            'product-name'      => 'ชื่อสินค้า',
            'action'            => 'การดำเนินการ',
        ],

        'edit' => [
            'title'             => 'แก้ไขใบเสนอราคา',
            'save-btn'          => 'บันทึกใบเสนอราคา',
            'quote-info'        => 'ข้อมูลใบเสนอราคา',
            'quote-info-info'   => 'กรอกข้อมูลพื้นฐานของใบเสนอราคา',
            'address-info'      => 'ข้อมูลที่อยู่',
            'address-info-info' => 'ข้อมูลเกี่ยวกับที่อยู่ที่เกี่ยวข้องกับใบเสนอราคา',
            'quote-items'       => 'รายการสินค้าในใบเสนอราคา',
            'link-to-lead'      => 'เชื่อมโยงกับลูกค้าเป้าหมาย',
            'quote-item-info'   => 'เพิ่มคำขอผลิตภัณฑ์สำหรับใบเสนอราคานี้',
            'quote-name'        => 'ชื่อใบเสนอราคา',
            'quantity'          => 'จำนวน',
            'price'             => 'ราคา',
            'search-products'   => 'ค้นหาผลิตภัณฑ์',
            'discount'          => 'ส่วนลด',
            'tax'               => 'ภาษี',
            'total'             => 'รวม',
            'amount'            => 'จำนวนเงิน',
            'add-item'          => 'เพิ่มรายการ',
            'sub-total'         => 'ยอดรวมย่อย (:symbol)',
            'total-discount'    => 'ส่วนลด (:symbol)',
            'total-tax'         => 'ภาษี (:symbol)',
            'total-adjustment'  => 'การปรับปรุงยอด (:symbol)',
            'grand-total'       => 'ยอดรวมทั้งหมด (:symbol)',
            'discount-amount'   => 'จำนวนส่วนลด',
            'tax-amount'        => 'จำนวนภาษี',
            'adjustment-amount' => 'จำนวนการปรับปรุง',
            'product-name'      => 'ชื่อผลิตภัณฑ์',
            'action'            => 'กิจกรรม',
        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'ตัวตน',
                'create-btn'     => 'สร้างตัวตน',
                'create-success' => 'สร้างตัวตนสำเร็จ.',
                'update-success' => 'อัปเดตตัวตนสำเร็จ.',
                'delete-success' => 'ลบตัวตนสำเร็จ',
                'delete-failed'  => 'ไม่สามารถลบตัวตนได้',

                'datagrid' => [
                    'contact-numbers'   => 'เบอร์ติดต่อ',
                    'delete'            => 'ลบ',
                    'edit'              => 'แก้ไข',
                    'emails'            => 'อีเมล',
                    'id'                => 'เลขประจำตัว',
                    'view'              => 'ดู',
                    'name'              => 'ชื่อ',
                    'organization-name' => 'ชื่อหน่วยงาน',
                ],
            ],

            'view' => [
                'title'        => ':name',
                'about-person' => 'ข้อมูลบุคคล',
                'about-organization' => 'ข้อมูลองค์กร',

                'activities' => [
                    'index' => [
                        'all'          => 'ทั้งหมด',
                        'calls'        => 'โทร',
                        'meetings'     => 'ประชุม',
                        'lunches'      => 'นัดตอนกินข้าวเที่ยง',
                        'files'        => 'ไฟล์',
                        'quotes'       => 'ใบเสนอราคา',
                        'notes'        => 'บันทึก',
                        'emails'       => 'อีเมล',
                        'by-user'      => 'โดย :user',
                        'scheduled-on' => 'กำหนดเวลา',
                        'location'     => 'สถานที่',
                        'participants' => 'ผู้เข้าร่วม',
                        'mark-as-done' => 'ทำเครื่องหมายว่าเสร็จสิ้น',
                        'delete'       => 'ลบ',
                        'edit'         => 'แก้ไข',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'อีเมล',
                            'title'    => 'เขียนอีเมล',
                            'to'       => 'ถึง',
                            'cc'       => 'สำเนาถึง',
                            'bcc'      => 'สำเนาลับถึง',
                            'subject'  => 'เรื่อง',
                            'send-btn' => 'ส่ง',
                            'message'  => 'ข้อความ',
                        ],

                        'file' => [
                            'btn'           => 'ไฟล์',
                            'title'         => 'เพิ่มไฟล์',
                            'title-control' => 'เรื่อง',
                            'name'          => 'ชื่อไฟล์',
                            'description'   => 'คำอธิบาย',
                            'file'          => 'ไฟล์',
                            'save-btn'      => 'บันทึกไฟล์',
                        ],

                        'note' => [
                            'btn'      => 'บันทึก',
                            'title'    => 'เพิ่มบันทึก',
                            'comment'  => 'ความคิดเห็น',
                            'save-btn' => 'บันทึก',
                        ],

                        'activity' => [
                            'btn'           => 'กิจกรรม',
                            'title'         => 'เพิ่มกิจกรรม',
                            'title-control' => 'เรื่อง',
                            'description'   => 'คำอธิบาย',
                            'schedule-from' => 'เวลาเริ่มต้น',
                            'schedule-to'   => 'เวลาสิ้นสุด',
                            'location'      => 'สถานที่',
                            'call'          => 'โทร',
                            'meeting'       => 'ประชุม',
                            'lunch'         => 'นัดตอนกินข้าวเที่ยง',
                            'save-btn'      => 'บันทึกกิจกรรม',
                        ],
                    ],
                ],
            ],

            'create' => [
                'title'    => 'สร้างบัญชีผู้ใช้',
                'save-btn' => 'บันทึกบัญชีผู้ใช้',
            ],

            'edit' => [
                'title'    => 'แก้ไขบัญชีผู้ใช้',
                'save-btn' => 'บันทึกบัญชีผู้ใช้',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'องค์กร',
                'create-btn'     => 'สร้างองค์กร',
                'create-success' => 'สร้างองค์กรสำเร็จ.',
                'update-success' => 'อัปเดตองค์กรสำเร็จ.',
                'delete-success' => 'ลบองค์กรสำเร็จ.',
                'delete-failed'  => 'ไม่สามารถลบองค์กรได้.',

                'datagrid' => [
                    'delete'        => 'ลบ',
                    'edit'          => 'แก้ไข',
                    'id'            => 'เลขประจำตัว',
                    'name'          => 'ชื่อ',
                    'persons-count' => 'จำนวนคน',
                ],
            ],

            'create' => [
                'title'    => 'สร้างองค์กร',
                'save-btn' => 'บันทึกองค์กร',
            ],

            'edit' => [
                'title'    => 'แก้ไของค์กร',
                'save-btn' => 'บันทึกองค์กร',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'ผลิตภัณฑ์',
            'create-btn'     => 'สร้างผลิตภัณฑ์',
            'create-success' => 'สร้างผลิตภัณฑ์สำเร็จ.',
            'update-success' => 'อัปเดตผลิตภัณฑ์สำเร็จ.',
            'delete-success' => 'ลบผลิตภัณฑ์สำเร็จ.',
            'delete-failed'  => 'ไม่สามารถลบผลิตภัณฑ์ได้.',

            'datagrid'   => [
                'allocated' => 'จัดสรร',
                'delete'    => 'ลบ',
                'edit'      => 'แก้ไข',
                'id'        => 'เลขประจำตัว',
                'in-stock'  => 'ในคลังสินค้า',
                'name'      => 'ชื่อ',
                'on-hand'   => 'มีสินค้าอยู่',
                'price'     => 'ราคา',
                'sku'       => 'รหัสสินค้า',
                'view'      => 'ดู',
            ],
        ],

        'create' => [
            'save-btn'  => 'บันทึกผลิตภัณฑ์',
            'title'     => 'สร้างผลิตภัณฑ์',
            'general'   => 'ทั่วไป',
            'price'     => 'ราคา',
        ],

        'edit' => [
            'title'     => 'แก้ไขผลิตภัณฑ์',
            'save-btn'  => 'บันทึกผลิตภัณฑ์',
            'general'   => 'ทั่วไป',
            'price'     => 'ราคา',
        ],

        'view' => [
            'sku'         => 'รหัสสินค้า',
            'all'         => 'ทั้งหมด',
            'notes'       => 'บันทึก',
            'files'       => 'ไฟล์',
            'inventories' => 'สินค้าคงคลัง',
            'change-logs' => 'ประวัติการเปลี่ยนแปลง',

            'attributes' => [
                'about-product' => 'เกี่ยวกับผลิตภัณฑ์',
            ],

            'inventory' => [
                'source'     => 'แหล่งที่มา',
                'in-stock'   => 'ในคลังสินค้า',
                'allocated'  => 'จัดสรร',
                'on-hand'    => 'มีสินค้าอยู่',
                'actions'    => 'การดำเนินการ',
                'assign'     => 'มอบหมาย',
                'add-source' => 'เพิ่มแหล่งที่มา',
                'location'   => 'สถานที่',
                'add-more'   => 'เพิ่มอีก',
                'save'       => 'บันทึก',
            ],
        ],
    ],

    'settings' => [
        'title' => 'การตั้งค่า',

        'groups' => [
            'index' => [
                'create-btn'        => 'สร้างกลุ่ม',
                'title'             => 'กลุ่ม',
                'create-success'    => 'สร้างกลุ่มสำเร็จ.',
                'update-success'    => 'อัปเดตกลุ่มสำเร็จ.',
                'destroy-success'   => 'ลบกลุ่มสำเร็จ.',
                'delete-failed'     => 'ไม่สามารถลบกลุ่มได้.',

                'datagrid'   => [
                    'delete'      => 'ลบ',
                    'description' => 'คำอธิบาย',
                    'edit'        => 'แก้ไข',
                    'id'          => 'เลขประจำตัว',
                    'name'        => 'ชื่อ',
                ],

                'edit' => [
                    'title' => 'แก้ไขกลุ่ม',
                ],

                'create' => [
                    'name'        => 'ชื่อ',
                    'title'       => 'สร้างกลุ่ม',
                    'description' => 'คำอธิบาย',
                    'save-btn'    => 'บันทึกกลุ่ม',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'ไม่สามารถลบบทบาทได้ ต้องเป็นแอดมินเท่านั้น.',
                'create-btn'                => 'สร้างตัวตน',
                'create-success'            => 'สร้างตัวตนสำเร็จ.',
                'current-role-delete-error' => 'ไม่สามารถลบบทบาทที่กำหนดได้.',
                'delete-failed'             => 'ไม่สามารถลบบทบาทได้.',
                'delete-success'            => 'ลบบทบาทสำเร็จ.',
                'last-delete-error'         => 'ต้องมีอย่างน้อยหนึ่งบทบาท.',
                'settings'                  => 'ตั้งค่า',
                'title'                     => 'บทบาท',
                'update-success'            => 'อัปเดตบทบาทสำเร็จ.',
                'user-define-error'         => 'ไม่สามารถลบระบบบทบาทได้.',

                'datagrid'   => [
                    'all'             => 'ทั้งหมด',
                    'custom'          => 'กำหนดเอง',
                    'delete'          => 'ลบ',
                    'description'     => 'คำอธิบาย',
                    'edit'            => 'แก้ไข',
                    'id'              => 'เลขประจำตัว',
                    'name'            => 'ชื่อ',
                    'permission-type' => 'สิทธิ์การเข้าถึง',
                ],
            ],

            'create' => [
                'access-control' => 'การควบคุมการเข้าถึง',
                'all'            => 'ทั้งหมด',
                'back-btn'       => 'กลับ',
                'custom'         => 'กำหนดเอง',
                'description'    => 'คำอธิบาย',
                'general'        => 'ทั่วไป',
                'name'           => 'ชื่อ',
                'permissions'    => 'สิทธิ์การเข้าถึง',
                'save-btn'       => 'บันทึกบทบาท',
                'title'          => 'สร้างบทบาท',
            ],

            'edit' => [
                'access-control' => 'การควบคุมการเข้าถึง',
                'all'            => 'ทั้งหมด',
                'back-btn'       => 'กลับ',
                'custom'         => 'กำหนดเอง',
                'description'    => 'คำอธิบาย',
                'general'        => 'ทั่วไป',
                'name'           => 'ชื่อ',
                'permissions'    => 'สิทธิ์การเข้าถึง',
                'save-btn'       => 'บันทึกบทบาท',
                'title'          => 'แก้ไขบทบาท',
            ],
        ],

        'types' => [
            'index' => [
                'create-btn'     => 'สร้างแบบ',
                'create-success' => 'สร้างแบบสำเร็จ.',
                'delete-failed'  => 'ไม่สามารถลบแบบได้.',
                'delete-success' => 'ลบแบบสำเร็จ.',
                'title'          => 'แบบ',
                'update-success' => 'อัปเดตแบบสำเร็จ.',

                'datagrid' => [
                    'delete'      => 'ลบ',
                    'description' => 'คำอธิบาย',
                    'edit'        => 'แก้ไข',
                    'id'          => 'เลขประจำตัว',
                    'name'        => 'ชื่อ',
                ],

                'create' => [
                    'name'     => 'ชื่อ',
                    'save-btn' => 'บันทึกแบบ',
                    'title'    => 'สร้างแบบ',
                ],

                'edit' => [
                    'title' => 'แก้ไขแบบ',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'สร้างแหล่งที่มา',
                'create-success' => 'สร้างแหล่งที่มาสำเร็จ.',
                'delete-failed'  => 'ไม่สามารถลบแหล่งที่มาได้.',
                'delete-success' => 'ลบแหล่งที่มาสำเร็จ.',
                'title'          => 'แหล่งที่มา',
                'update-success' => 'อัปเดตแหล่งที่มาสำเร็จ.',

                'datagrid' => [
                    'delete' => 'ลบ',
                    'edit'   => 'แก้ไข',
                    'id'     => 'เลขประจำตัว',
                    'name'   => 'ชื่อ',
                ],

                'create' => [
                    'name'     => 'ชื่อ',
                    'save-btn' => 'บันทึกแบบ',
                    'title'    => 'สร้างแบบ',
                ],

                'edit' => [
                    'title' => 'แก้ไขแบบ',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'ขั้นตอนการทำงาน',
                'create-btn'     => 'สร้างขั้นตอนการทำงาน',
                'create-success' => 'สร้างขั้นตอนการทำงานสำเร็จ.',
                'update-success' => 'อัปเดตขั้นตอนการทำงานสำเร็จ.',
                'delete-success' => 'ลบขั้นตอนการทำงานสำเร็จ.',
                'delete-failed'  => 'ไม่สามารถลบขั้นตอนการทำงานได้.',
                'datagrid'       => [
                    'delete'      => 'ลบ',
                    'description' => 'คำอธิบาย',
                    'edit'        => 'แก้ไข',
                    'id'          => 'เลขประจำตัว',
                    'name'        => 'ชื่อ',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => 'อัปเดตกลุ่มเป้าหมายที่เกี่ยวข้อง',
                'send-email-to-sales-owner'  => 'ส่งอีเมลถึงฝ่ายขาย',
                'send-email-to-participants' => 'ส่งอีเมลถึงผู้เข้าร่วม',
                'add-webhook'                => 'เพิ่มตัวส่งสัญญาณแบบอัตโนมัติ (webhook)',
                'update-lead'                => 'อัปเดตกลุ่มเป้าหมาย',
                'update-person'              => 'อัปเดตบุคคล',
                'send-email-to-person'       => 'ส่งอีเมลถึงบุคคล',
                'add-tag'                    => 'เพิ่มแท็ก',
                'add-note-as-activity'       => 'เพิ่มโน๊ตเป็นกิจกรรม',
            ],

            'create' => [
                'title'                  => 'สร้างขั้นตอนการทำงาน',
                'event'                  => 'กิจกรรม',
                'back-btn'               => 'กลับ',
                'save-btn'               => 'บันทึกขั้นตอนการทำงาน',
                'name'                   => 'ชื่อ',
                'basic-details'          => 'รายละเอียดพื้นฐาน',
                'description'            => 'คำอธิบาย',
                'actions'                => 'การดำเนินการ',
                'basic-details-info'     => 'กรอกข้อมูลพื้นฐานของขั้นตอนการทำงาน.',
                'event-info'             => 'กิจกรรมจะถูกกระตุ้น(triggeres)ตรวจสอบเงื่อนไขและดำเนินการตามที่กำหนดไว้ล่วงหน้า.',
                'conditions'             => 'เงื่อนไข',
                'conditions-info'        => 'เงื่อนไขเป็นกฎที่ตรวจสอบสถานการณ์ที่ถูกกระตุ้น(triggered)ในโอกาสเฉพาะ.',
                'actions-info'           => 'การดำเนินการไม่เพียงแต่ลดภาระงาน แต่ยังทำให้ระบบอัตโนมัติของ CRM ง่ายมากขึ้น',
                'value'                  => 'ค่า',
                'condition-type'         => 'ประเภทของเงื่อนไข',
                'all-condition-are-true' => 'เงื่อนไขทั้งหมดเป็นจริง',
                'any-condition-are-true' => 'บางเงื่อนไขเป็นจริง',
                'add-condition'          => 'เพิ่มเงื่อนไข',
                'add-action'             => 'เพิ่มการดำเนินการ',
                'yes'                    => 'ใช่',
                'no'                     => 'ไม่',
                'email'                  => 'อีเมล',
                'is-equal-to'            => 'เท่ากับ',
                'is-not-equal-to'        => 'ไม่เท่ากับ',
                'equals-or-greater-than' => 'มากกว่าหรือเท่ากับ',
                'equals-or-less-than'    => 'น้อยกว่าหรือเท่ากับ',
                'greater-than'           => 'มากกว่า',
                'less-than'              => 'น้อยกว่า',
                'type'                   => 'ประเภท',
                'contain'                => 'ประกอบด้วย',
                'contains'               => 'ประกอบด้วย',
                'does-not-contain'       => 'ไม่ประกอบด้วย',
            ],

            'edit' => [
                'title'                  => 'แก้ไขขั้นตอนการทำงาน',
                'event'                  => 'กิจกรรม',
                'back-btn'               => 'กลับ',
                'save-btn'               => 'บันทึกขั้นตอนการทำงาน',
                'name'                   => 'ชื่อ',
                'basic-details'          => 'รายละเอียดพื้นฐาน',
                'description'            => 'คำอธิบาย',
                'actions'                => 'การดำเนินการ',
                'type'                   => 'ประเภท',
                'basic-details-info'     => 'กรอกข้อมูลพื้นฐานของขั้นตอนการทำงาน.',
                'event-info'             => 'กิจกรรมจะถูกกระตุ้น(triggeres)ตรวจสอบเงื่อนไขและดำเนินการตามที่กำหนดไว้ล่วงหน้า.',
                'conditions'             => 'เงื่อนไข',
                'conditions-info'        => 'เงื่อนไขเป็นกฎที่ตรวจสอบสถานการณ์ที่ถูกกระตุ้น(triggered)ในโอกาสเฉพาะ',
                'actions-info'           => 'การดำเนินการไม่เพียงแต่ลดภาระงาน แต่ยังทำให้ระบบอัตโนมัติของ CRM ง่ายมากขึ้น',
                'value'                  => 'ค่า',
                'condition-type'         => 'ประเภทของเงื่อนไข',
                'all-condition-are-true' => 'เงื่อนไขทั้งหมดเป็นจริง',
                'any-condition-are-true' => 'บางเงื่อนไขเป็นจริง',
                'add-condition'          => 'เพิ่มเงื่อนไข',
                'add-action'             => 'เพิ่มกิจกรรม',
                'yes'                    => 'ใช่',
                'no'                     => 'ไม่',
                'email'                  => 'อีเมล',
                'is-equal-to'            => 'เท่ากับ',
                'is-not-equal-to'        => 'ไม่เท่ากับ',
                'equals-or-greater-than' => 'มากกว่าหรือเท่ากับ',
                'equals-or-less-than'    => 'น้อยกว่าหรือเท่ากับ',
                'greater-than'           => 'มากกว่า',
                'less-than'              => 'น้อยกว่า',
                'contain'                => 'ประกอบด้วย',
                'contains'               => 'ประกอบด้วย',
                'does-not-contain'       => 'ไม่ประกอบด้วย',
            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'Webforms',
                'create-btn'     => 'สร้าง Webform',
                'create-success' => 'สร้าง Webform สำเร็จ.',
                'update-success' => 'อัปเดต Webform สำเร็จ.',
                'delete-success' => 'ลบ Webform สำเร็จ.',
                'delete-failed'  => 'ไม่สามารถลบ Webform ได้.',

                'datagrid'       => [
                    'id'     => 'เลขประจำตัว',
                    'title'  => 'เรื่อง',
                    'edit'   => 'แก้ไข',
                    'delete' => 'ลบ',
                ],
            ],

            'create' => [
                'add-attribute-btn'        => 'เพิ่มปุ่ม Attribute',
                'attribute-label-color'    => 'ป้ายกำกับ Attribute',
                'attributes'               => 'Attributes',
                'attributes-info'          => 'เพิ่ม attributes ที่กำหนดเองลงในฟอร์ม.',
                'background-color'         => 'สีพื้นหลัง',
                'create-lead'              => 'สร้างกลุ่มเป้าหมาย',
                'customize-webform'        => 'กำหนดค่า Webform ด้วยตัวเอง',
                'customize-webform-info'   => 'กำหนดรูปแบบ web form ของคุณด้วยสิ่งที่คุณเลือก.',
                'description'              => 'คำอธิบาย',
                'display-custom-message'   => 'แสดงข้อความแบบกำหนดเอง',
                'form-background-color'    => 'สีพื้นหลังของฟอร์ม',
                'form-submit-btn-color'    => 'สีของปุ่มยืนยันการส่งฟอร์ม',
                'form-submit-button-color' => 'สีของปุ่มยืนยันการส่งฟอร์ม',
                'form-title-color'         => 'สีของหัวข้อแบบปอร์ม',
                'general'                  => 'ทั่วไป',
                'leads'                    => 'กลุ่มเป้าหมาย',
                'person'                   => 'บุคคล',
                'save-btn'                 => 'บันทึก Webform',
                'submit-button-label'      => 'ป้ายกำกับปุ่มส่ง',
                'submit-success-action'    => 'การดำเนินการหลังส่งฟอร์มสำเร็จ',
                'title'                    => 'สร้าง Webform',
            ],

            'edit' => [
                'add-attribute-btn'         => 'เพิ่มปุ่ม Attribute',
                'attribute-label-color'     => 'ป้ายกำกับ Attribute',
                'attributes'                => 'Attributes',
                'attributes-info'           => 'เพิ่ม attributes แบบกำหนดเองลงในฟอร์ม.',
                'background-color'          => 'สีพื้นหลัง',
                'code-snippet'              => 'โค้ดปรากฎขึ้นแบบอัตโนมัติ',
                'copied'                    => 'คัดลอก',
                'copy'                      => 'คัดลอก',
                'create-lead'               => 'สร้างกลุ่มเป้าหมาย',
                'customize-webform'         => 'กำหนด Webform เอง',
                'customize-webform-info'    => 'กำหนดรูปแบบ web form ของคุณด้วยสิ่งที่คุณเลือก.',
                'description'               => 'คำอธิบาย',
                'display-custom-message'    => 'แสดงข้อความแบบกำหนดเอง',
                'embed'                     => 'ตรึง',
                'form-background-color'     => 'สีพื้นหลังของฟอร์ม',
                'form-submit-btn-color'     => 'สีของปุ่มยืนยันการส่งฟอร์ม',
                'form-submit-button-color'  => 'สีของปุ่มยืนยันการส่งฟอร์ม',
                'form-title-color'          => 'สีของหัวข้อแบบปอร์ม',
                'general'                   => 'ทั่วไป',
                'preview'                   => 'ดูตัวอย่าง',
                'person'                    => 'บุคคล',
                'public-url'                => 'URL สาธารณะ',
                'redirect-to-url'           => 'เปลี่ยนเส้นทางไปยัง URL',
                'save-btn'                  => 'บันทึก Webform',
                'submit-button-label'       => 'ป้ายกำกับปุ่มส่ง',
                'submit-success-action'     => 'การดำเนินการหลังส่งฟอร์มสำเร็จ',
                'title'                     => 'แก้ไข Webform',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'สร้าง Email Template',
                'title'          => 'Email Templates',
                'create-success' => 'สร้าง Email Template สำเร็จ.',
                'update-success' => 'อัปเดต Email Template สำเร็จ.',
                'delete-success' => 'ลบ Email Template สำเร็จ.',
                'delete-failed'  => 'ไม่สามารถลบ Email Template ได้.',

                'datagrid'   => [
                    'delete'       => 'ลบ',
                    'edit'         => 'แก้ไข',
                    'id'           => 'เลขประจำตัว',
                    'name'         => 'ชื่อ',
                    'subject'      => 'เรื่อง',
                ],
            ],

            'create'     => [
                'title'                => 'สร้าง Email Template',
                'save-btn'             => 'บันทึก Email Template',
                'email-template'       => 'Email Template',
                'subject'              => 'เรื่อง',
                'content'              => 'เนื้อหา',
                'subject-placeholders' => 'หัวข้อย่อย',
                'general'              => 'ทั่วไป',
                'name'                 => 'ชื่อ',
            ],

            'edit' => [
                'title'                => 'แก้ไข Email Template',
                'save-btn'             => 'บันทึก Email Template',
                'email-template'       => 'Email Template',
                'subject'              => 'เรื่อง',
                'content'              => 'เนื้อหา',
                'subject-placeholders' => 'หัวข้อย่อย',
                'general'              => 'ทั่วไป',
                'name'                 => 'ชื่อ',
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'สร้างแท็ก',
                'title'          => 'แท็ก',
                'create-success' => 'สร้างแท็กเสร็จสิ้น.',
                'update-success' => 'อัปเดตแท็กเสร็จสิ้น.',
                'delete-success' => 'ลบแท็กเสร็จสิ้น.',
                'delete-failed'  => 'ไม่สามารถลบแท็กได้.',

                'datagrid' => [
                    'delete'      => 'ลบ',
                    'edit'        => 'แก้ไข',
                    'id'          => 'เลขประจำตัว',
                    'name'        => 'ชื่อ',
                    'users'       => 'ผู้ใช้งาน',
                    'created-at'  => 'สร้างเมื่อ',
                ],

                'create' => [
                    'name'     => 'ชื่อ',
                    'save-btn' => 'บันทึกแท็ก',
                    'title'    => 'สร้างแท็ก',
                    'color'    => 'สี',
                ],

                'edit' => [
                    'title' => 'แก้ไขแท็ก',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'สร้างผู้ใช้งาน',
                'create-success'      => 'สร้างผู้ใช้งานเสร็จสิ้น.',
                'delete-failed'       => 'ไม่สามารถลบผู้ใช้งานได้.',
                'delete-success'      => 'ลบผู้ใช้งานเสร็จสิ้นแล้ว.',
                'last-delete-error'   => 'ต้องมีผู้ใช้อย่างน้อยหนึ่งคน.',
                'mass-delete-failed'  => 'ไม่สามารถลบผู้ใช้ได้.',
                'mass-delete-success' => 'ลบผู้ใช้สำเร็จแล้ว.',
                'mass-update-failed'  => 'ไม่สามารถอัปเดตผู้ใช้ได้.',
                'mass-update-success' => 'อัปเดตผู้ใช้สำเร็จแล้ว.',
                'title'               => 'ผู้ใช้งาน',
                'update-success'      => 'อัปเดตผู้ใช้สำเร็จแล้ว.',
                'user-define-error'   => 'ไม่สามารถลบผู้ใช้ได้.',
                'active'              => 'กิจกรรม',
                'inactive'            => 'ไม่ใช้งาน',

                'datagrid' => [
                    'active'        => 'กิจกรรม',
                    'created-at'    => 'สร้างเมื่อ',
                    'delete'        => 'ลบ',
                    'edit'          => 'แก้ไข',
                    'email'         => 'อีเมล',
                    'id'            => 'เลขประจำตัว',
                    'inactive'      => 'ไม่ใช้งาน',
                    'name'          => 'ชื่อ',
                    'status'        => 'สถานะ',
                    'update-status' => 'อัปเดตสถานะ',
                    'users'         => 'ผู้ใช้งาน',
                ],

                'create' => [
                    'confirm-password' => 'ยืนยันรหัสผ่าน',
                    'email'            => 'อีเมล',
                    'general'          => 'ทั่วไป',
                    'global'           => 'สากล',
                    'group'            => 'กลุ่ม',
                    'individual'       => 'รายบุคคล',
                    'name'             => 'ชื่อ',
                    'password'         => 'รหัสผ่าน',
                    'permission'       => 'การอนุญาต',
                    'role'             => 'บทบาท',
                    'save-btn'         => 'บันทึกบัญชีผู้ใช้',
                    'status'           => 'สถานะ',
                    'title'            => 'สร้างผู้ใช้งาน',
                    'view-permission'  => 'ดูสิทธิ์ความยินยอม',
                ],

                'edit' => [
                    'title' => 'แก้ไขบัญชีผู้ใช้',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'ระบบติดตาม',
                'create-btn'           => 'สร้างระบบติดตาม',
                'create-success'       => 'สร้างระบบติดตามสำเร็จ.',
                'update-success'       => 'อัปเดตระบบติดตามสำเร็จ.',
                'delete-success'       => 'ลบระบบติดตามสำเร็จ.',
                'delete-failed'        => 'ไม่สามารถลบระบบติดตามได้.',
                'default-delete-error' => 'มีเงื่อนไขที่ไม่สามารถลบระบบติดตามได้.',

                'datagrid' => [
                    'delete'      => 'ลบ',
                    'edit'        => 'แก้ไข',
                    'id'          => 'เลขประจำตัว',
                    'is-default'  => 'เป็นค่าเริ่มต้น',
                    'name'        => 'ชื่อ',
                    'no'          => 'ไม่',
                    'rotten-days' => 'วันสิ้นสุด',
                    'yes'         => 'ใช่',
                ],
            ],

            'create' => [
                'title'                => 'สร้างระบบติดตาม',
                'save-btn'             => 'บันทึกระบบติดตาม',
                'name'                 => 'ชื่อ',
                'rotten-days'          => 'วันสิ้นสุด',
                'mark-as-default'      => 'กำหนดเป็นค่าเริ่มต้น',
                'general'              => 'ทั่วไป',
                'probability'          => 'ความน่าจะเป็น (%)',
                'new-stage'            => 'ใหม่',
                'won-stage'            => 'ชนะ',
                'lost-stage'           => 'แพ้',
                'stage-btn'            => 'เพิ่มขั้นตอน',
                'stages'               => 'ขั้นตอน',
                'duplicate-name'       => 'ชื่อฟิลด์ไม่สามารถซ้ำกันได้',
                'delete-stage'         => 'ลบขั้นตอน',
                'add-new-stages'       => 'เพิ่มขั้นตอนใหม่',
                'add-stage-info'       => 'เพิ่มขั้นตอนใหม่สำหรับระบบการติดตามของคุณ',
                'newly-added'          => 'เพิ่มใหม่',
                'stage-delete-success' => 'ลบขั้นตอนสำเร็จแล้ว',
            ],

            'edit'  => [
                'title'                => 'แก้ไขระบบติดตาม',
                'save-btn'             => 'บันทึกระบบติดตาม',
                'name'                 => 'ชื่อ',
                'rotten-days'          => 'วันสิ้นสุด',
                'mark-as-default'      => 'กำหนดเป็นค่าเริ่มต้น',
                'general'              => 'ทั่วไป',
                'probability'          => 'ความน่าจะเป็น (%)',
                'new-stage'            => 'ใหม่',
                'won-stage'            => 'ชนะ',
                'lost-stage'           => 'แพ้',
                'stage-btn'            => 'เพิ่มขั้นตอน',
                'stages'               => 'ขั้นตอน',
                'duplicate-name'       => 'ชื่อไม่สามารถซ้ำกันได้',
                'delete-stage'         => 'ลบขั้นตอน',
                'add-new-stages'       => 'เพิ่มขั้นตอนใหม่',
                'add-stage-info'       => 'เพิ่มขั้นตอนใหม่สำหรับระบบการติดตามของคุณ',
                'stage-delete-success' => 'ลบขั้นตอนสำเร็จแล้ว',
            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'Webhooks',
                'create-btn'     => 'สร้าง Webhook',
                'create-success' => 'สร้าง Webhook สำเร็จ.',
                'update-success' => 'อัปเดต Webhook สำเร็จ.',
                'delete-success' => 'ลบ Webhook สำเร็จ.',
                'delete-failed'  => 'ไม่สามารถ Webhook ได้.',

                'datagrid' => [
                    'id'          => 'เลขประจำตัว',
                    'delete'      => 'ลบ',
                    'edit'        => 'แก้ไข',
                    'name'        => 'ชื่อ',
                    'entity-type' => 'ประเภทของข้อมูล',
                    'end-point'   => 'จุดสิ้นสุด',
                ],
            ],

            'create' => [
                'title'                 => 'สร้าง Webhook',
                'save-btn'              => 'บันทึก Webhook',
                'info'                  => 'กรอกรายละเอียดของ webhooks',
                'url-and-parameters'    => 'ค่าตัวแปรต่างๆ ที่ถูกส่งผ่าน URL มา',
                'method'                => 'วิธีการ',
                'post'                  => 'โพสต์',
                'put'                   => 'ใส่',
                'url-endpoint'          => 'จุดสิ้นสุด',
                'parameters'            => 'ตัวแปร',
                'add-new-parameter'     => 'เพิ่มตัวแปรใหม่',
                'url-preview'           => 'ตัวอย่าง URL:',
                'headers'               => 'ส่วนหัว',
                'add-new-header'        => 'เพิ่มส่วนหัวใหม่',
                'body'                  => 'เนื้อหา',
                'default'               => 'ค่าเริ่มต้น',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'raw'                   => 'ข้อมูลดิบ',
                'general'               => 'ทั่วไป',
                'name'                  => 'ชื่อ',
                'entity-type'           => 'ประเภทของข้อมูล',
                'insert-placeholder'    => 'แทรกตัวกรอก',
                'description'           => 'คำอธิบาย',
                'json'                  => 'Json',
                'text'                  => 'ข้อความ',
            ],

            'edit' => [
                'title'                 => 'แก้ไข Webhook',
                'edit-btn'              => 'บันทึก Webhook',
                'save-btn'              => 'บันทึก Webhook',
                'info'                  => 'กรอกรายละเอียดของ webhooks',
                'url-and-parameters'    => 'URL และพารามิเตอร์',
                'method'                => 'วิธีการ',
                'post'                  => 'โพสต์',
                'put'                   => 'ใส่',
                'url-endpoint'          => 'จุดสิ้นสุด',
                'parameters'            => 'พารามิเตอร์',
                'add-new-parameter'     => 'เพิ่มพารามิเตอร์',
                'url-preview'           => 'ตัวอย่าง URL:',
                'headers'               => 'ส่วนหัว',
                'add-new-header'        => 'เพิ่มส่วนหัวใหม่',
                'body'                  => 'เนื้อหา',
                'default'               => 'ค่าเริ่มต้น',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'raw'                   => 'ข้อมูลดิบ',
                'general'               => 'ทั่วไป',
                'name'                  => 'ชื่อ',
                'entity-type'           => 'ประเภทของข้อมูล',
                'insert-placeholder'    => 'แทรกตัวกรอก',
                'description'           => 'คำอธิบาย',
                'json'                  => 'Json',
                'text'                  => 'ข้อความ',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'คลังสินค้า',
                'create-btn'     => 'สร้างคลังสินค้า',
                'create-success' => 'สร้างคลังสินค้าสำเร็จแล้ว.',
                'name-exists'    => 'ชื่อคลังสินค้ามีอยู่แล้ว.',
                'update-success' => 'อัปเดตคลังสินค้าสำเร็จแล้ว.',
                'delete-success' => 'ลบคลังสินค้าสำเร็จแล้ว.',
                'delete-failed'  => 'ไม่สามารถลบคลังสินค้าได้.',

                'datagrid' => [
                    'id'              => 'เลขประจำตัว',
                    'name'            => 'ชื่อ',
                    'contact-name'    => 'ชื่อผู้ติดต่อ',
                    'delete'          => 'ลบ',
                    'edit'            => 'แก้ไข',
                    'view'            => 'ดู',
                    'created-at'      => 'สร้างเมื่อ',
                    'products'        => 'ผลิตภัณฑ์',
                    'contact-emails'  => 'อีเมลผู้ติดต่อ',
                    'contact-numbers' => 'เบอร์โทรศัพท์ผู้ติดต่อ',
                ],
            ],

            'create' => [
                'title'         => 'สร้างคลังสินค้า',
                'save-btn'      => 'บันทึกคลังสินค้า',
                'contact-info'  => 'ข้อมูลการติดต่อ',
            ],

            'edit' => [
                'title'         => 'แก้ไขคลังสินค้า',
                'save-btn'      => 'บันทึกคลังสินค้า',
                'contact-info'  => 'ข้อมูลการติดต่อ',
            ],

            'view' => [
                'all'         => 'ทั้งหมด',
                'notes'       => 'บันทึก',
                'files'       => 'ไฟล์ภาพ',
                'location'    => 'สถานที่',
                'change-logs' => 'ประวัติการเปลี่ยนแปลง',

                'locations' => [
                    'action'         => 'การดำเนินการ',
                    'add-location'   => 'เพิ่มสถานที่',
                    'create-success' => 'เพิ่มสถานที่สำเร็จ.',
                    'delete'         => 'ลบ',
                    'delete-failed'  => 'ไม่สามารถลบสถานที่ได้.',
                    'delete-success' => 'ลบสถานที่สำเร็จ.',
                    'name'           => 'ชื่อ',
                    'save-btn'       => 'บันทึก',
                ],

                'general-information' => [
                    'title' => 'ข้อมูลทั่วไป',
                ],

                'contact-information' => [
                    'title' => 'ข้อมูลการติดต่อ',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => 'ลักษณะเฉพาะของข้อมูล',
                'create-btn'         => 'สร้างลักษณะเฉพาะของข้อมูล',
                'create-success'     => 'สร้างลักษณะเฉพาะของข้อมูลสำเร็จ.',
                'update-success'     => 'อัปเดตลักษณะเฉพาะของข้อมูลสำเร็จ',
                'delete-success'     => 'ลบลักษณะเฉพาะของข้อมูลสำเร็จ.',
                'delete-failed'      => 'ไม่สามารถลบลักษณะเฉพาะของข้อมูลได้.',
                'user-define-error'  => 'ไม่สามารถลบลักษณะเฉพาะของข้อมูลได้.',
                'mass-delete-failed' => 'ไม่สามารถลบลักษณะเฉพาะของข้อมูลได้.',

                'datagrid' => [
                    'yes'         => 'ใช่',
                    'no'          => 'ไม่',
                    'id'          => 'เลขประจำตัว',
                    'code'        => 'โค้ด',
                    'name'        => 'ชื่อ',
                    'entity-type' => 'กลุ่มของสิ่งต่าง ๆ ที่เราสนใจจะเก็บข้อมูลไว้ในฐานข้อมูล',
                    'type'        => 'ประเภท',
                    'is-default'  => 'เป็นค่าเริ่มต้น',
                    'edit'        => 'แก้ไข',
                    'delete'      => 'ลบ',
                ],
            ],

            'create'  => [
                'title'                 => 'สร้างลักษณะเฉพาะของข้อมูล',
                'save-btn'              => 'บันทึกลักษณะเฉพาะของข้อมูล',
                'code'                  => 'โค้ด',
                'name'                  => 'ชื่อ',
                'entity-type'           => 'กลุ่มของสิ่งต่าง ๆ ที่เราสนใจจะเก็บข้อมูลไว้ในฐานข้อมูล',
                'type'                  => 'ประเภท',
                'validations'           => 'การตรวจสอบความถูกต้อง',
                'is-required'           => 'จำเป็นต้องกรอก',
                'input-validation'      => 'การตรวจสอบข้อมูลขาเข้า',
                'is-unique'             => 'ต้องไม่ซ้ำกัน',
                'labels'                => 'ป้ายกำกับ',
                'general'               => 'ทั่วไป',
                'numeric'               => 'ตัวเลข',
                'decimal'               => 'ทศนิยม',
                'url'                   => 'URL',
                'options'               => 'ตัวเลือก',
                'option-type'           => 'ประเภทตัวเลือก',
                'lookup-type'           => 'ประเภทการค้นหา',
                'add-option'            => 'เพิ่มตัวเลือก',
                'save-option'           => 'บันทึกตัวเลือก',
                'option-name'           => 'ชื่อตัวเลือก',
                'add-attribute-options' => 'เพิ่มตัวเลือกลักษณะเฉพาะของข้อมูล',
                'text'                  => 'ข้อความ',
                'textarea'              => 'กล่องข้อความ',
                'price'                 => 'ราคา',
                'boolean'               => 'ค่าตรรกะ (จริง/เท็จ)',
                'select'                => 'เลือก',
                'multiselect'           => 'เลือกได้หลายรายการ',
                'email'                 => 'อีเมล',
                'address'               => 'ที่อยู่',
                'phone'                 => 'โทร',
                'datetime'              => 'วันเวลา',
                'date'                  => 'วันที่',
                'image'                 => 'รูปภาพ',
                'file'                  => 'ไฟล์',
                'lookup'                => 'ค้นหา',
                'entity_type'           => 'กลุ่มของสิ่งต่าง ๆ ที่เราสนใจจะเก็บข้อมูลไว้ในฐานข้อมูล',
                'checkbox'              => 'ช่องทำเครื่องหมาย',
                'is_required'           => 'จำเป็นต้องกรอก',
                'is_unique'             => 'ต้องไม่ซ้ำกัน',
            ],

            'edit'  => [
                'title'                 => 'แก้ไขลักษณะเฉพาะของข้อมูล',
                'save-btn'              => 'บันทึกลักษณะเฉพาะของข้อมูล',
                'code'                  => 'โค้ด',
                'name'                  => 'ชื่อ',
                'labels'                => 'ป้ายกำกับ',
                'entity-type'           => 'กลุ่มของสิ่งต่าง ๆ ที่เราสนใจจะเก็บข้อมูลไว้ในฐานข้อมูล',
                'type'                  => 'ประเภท',
                'validations'           => 'การตรวจสอบความถูกต้อง',
                'is-required'           => 'จำเป็นต้องกรอก',
                'input-validation'      => 'การตรวจสอบข้อมูลขาเข้า',
                'is-unique'             => 'ต้องไม่ซ้ำกัน',
                'general'               => 'ทั่วไป',
                'numeric'               => 'ตัวเลข',
                'decimal'               => 'ทศนิยม',
                'url'                   => 'URL',
                'options'               => 'ตัวเลข',
                'option-type'           => 'ประเภทตัวเลือก',
                'lookup-type'           => 'ประเภทการค้นหา',
                'add-option'            => 'เพิ่มตัวเลือก',
                'save-option'           => 'บันทึกตัวเลือก',
                'option-name'           => 'ชื่อตัวเลือก',
                'add-attribute-options' => 'เพิ่มตัวเลือกลักษณะเฉพาะของข้อมูล',
                'text'                  => 'ข้อความ',
                'textarea'              => 'กล่องข้อความ',
                'price'                 => 'ราคา',
                'boolean'               => 'ค่าตรรกะ (จริง/เท็จ)',
                'select'                => 'เลือก',
                'multiselect'           => 'เลือกได้หลายรายการ',
                'email'                 => 'อีเมล',
                'address'               => 'ที่อยู่',
                'phone'                 => 'โทร',
                'datetime'              => 'วันเวลา',
                'date'                  => 'วันที่',
                'image'                 => 'ภาพ',
                'file'                  => 'ไฟล์',
                'lookup'                => 'ค้นหา',
                'entity_type'           => 'กลุ่มของสิ่งต่าง ๆ ที่เราสนใจจะเก็บข้อมูลไว้ในฐานข้อมูล',
                'checkbox'              => 'ช่องทำเครื่องหมาย',
                'is_required'           => 'จำเป็นต้องกรอก',
                'is_unique'             => 'ต้องไม่ซ้ำกัน',
            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title'      => 'กิจกรรม',

            'datagrid' => [
                'comment'       => 'ความคิดเห็น',
                'created_at'    => 'สร้างเมื่อ',
                'created_by'    => 'สร้างโดย',
                'edit'          => 'แก้ไข',
                'id'            => 'เลขประจำตัว',
                'done'          => 'เสร็จสมบูรณ์แล้ว',
                'not-done'      => 'ยังไม่เสร็จสิ้น',
                'lead'          => 'กลุ่มเป้าหมาย',
                'mass-delete'   => 'ลบแบบกลุ่ม',
                'mass-update'   => 'ลบแบบกลุ่ม',
                'schedule-from' => 'เวลาเริ่มต้น',
                'schedule-to'   => 'เวลาสิ้นสุด',
                'schedule_from' => 'เวลาเริ่มต้น',
                'schedule_to'   => 'เวลาสิ้นสุด',
                'title'         => 'หัวข้อ',
                'is_done'       => 'เสร็จสมบูรณ์แล้ว',
                'type'          => 'ประเภท',
                'update'        => 'อัปเดต',
                'call'          => 'โทร',
                'meeting'       => 'ประชุม',
                'lunch'         => 'นัดตอนกินข้าวเที่ยง',
            ],
        ],

        'edit' => [
            'title'           => 'แก้ไขกิจกรรม',
            'back-btn'        => 'กลับ',
            'save-btn'        => 'บันทึกกิจกรรม',
            'type'            => 'ประเภทกิจกรรม',
            'call'            => 'โทร',
            'meeting'         => 'ประชุม',
            'lunch'           => 'นัดตอนกินข้าวเที่ยง',
            'schedule_to'     => 'เวลาสิ้นสุด',
            'schedule_from'   => 'เวลาเริ่มต้น',
            'location'        => 'สถานที่',
            'comment'         => 'ความคิดเห็น',
            'lead'            => 'กลุ่มเป้าหมาย',
            'participants'    => 'ผู้เข้าร่วม',
            'general'         => 'ทั่วไป',
            'persons'         => 'บุคคล',
            'no-result-found' => 'ไม่พบข้อมูล.',
            'users'           => 'ผู้ใช้งาน',
        ],

        'updated'              => 'อัปเดต :attribute',
        'created'              => 'สร้าง',
        'duration-overlapping' => 'ผู้เข้าร่วมมีการประชุมอื่นในเวลานี้ คุณต้องการดำเนินการต่อหรือไม่?',
        'create-success'       => 'สร้างกิจกรรมสำเร็จแล้ว.',
        'update-success'       => 'อัปเดตกิจกรรมสำเร็จแล้ว.',
        'overlapping-error'    => 'ผู้เข้าร่วมมีการประชุมอื่นในเวลานี้.',
        'mass-update-success'  => 'อัปเดตกิจกรรมสำเร็จแล้ว.',
        'destroy-success'      => 'ลบกิจกรรมสำเร็จแล้ว.',
        'delete-failed'        => 'ไม่สามารถลบกิจกรรมได้',
    ],

    'mail' => [
        'index' => [
            'compose'           => 'เขียน',
            'draft'             => 'ร่าง',
            'inbox'             => 'กล่องขาเข้า',
            'outbox'            => 'กล่องขาออก',
            'sent'              => 'ส่ง',
            'trash'             => 'ถังขยะ',
            'compose-mail-btn'  => 'เขียนอีเมล',
            'btn'               => 'อีเมล',
            'mail'              => [
                'title'         => 'เขียนอีเมล',
                'to'            => 'ถึง',
                'enter-emails'  => 'กด Enter เพื่อเพิ่มอีเมล',
                'cc'            => 'สำเนาถึง',
                'bcc'           => 'สำเนาลับถึง',
                'subject'       => 'เรื่อง',
                'send-btn'      => 'ส่ง',
                'message'       => 'ข้อความ',
                'draft'         => 'ร่าง',
            ],

            'datagrid' => [
                'id'            => 'เลขประจำตัว',
                'from'          => 'จาก',
                'to'            => 'ถึง',
                'subject'       => 'หัวข้อ',
                'tag-name'      => 'ชื่อแท็ก',
                'created-at'    => 'สร้างเมื่อ',
                'move-to-inbox' => 'ย้ายไปยังกล่องขาเข้า',
                'edit'          => 'แก้ไข',
                'view'          => 'ดู',
                'delete'        => 'ลบ',
            ],
        ],

        'create-success'      => 'ส่งอีเมลสำเร็จแล้ว.',
        'update-success'      => 'อัปเดตอีเมลสำเร็จแล้ว.',
        'mass-update-success' => 'อัปเดตอีเมลสำเร็จแล้ว.',
        'delete-success'      => 'ลบอีเมลสำเร็จแล้ว.',
        'delete-failed'       => 'ไม่สามารถลบอีเมลได้
        .',

        'view' => [
            'title'                      => 'อีเมล',
            'subject'                    => ':subject',
            'link-mail'                  => 'ลิ้งก์ไปยังอีเมล',
            'to'                         => 'ถึง',
            'cc'                         => 'สำเนาถึง',
            'bcc'                        => 'สำเนาลับถึง',
            'reply'                      => 'ตอบกลับ',
            'reply-all'                  => 'ตอบกลับทั้งหมด',
            'forward'                    => 'ส่งต่อ',
            'delete'                     => 'ลบ',
            'enter-mails'                => 'กรอกรหัสอีเมล',
            'rotten-days'                => 'กลุ่มเป้าหมายหมดอายุแล้ว :days วัน',
            'search-an-existing-lead'    => 'กลุ่มลูกค้าเป้าหมายที่มีอยู่',
            'search-an-existing-contact' => 'ค้นหาผู้ติดต่อที่มีอยู่',
            'message'                    => 'ข้อความ',
            'add-attachments'            => 'เพิ่มไฟล์แนบ',
            'discard'                    => 'ทิ้ง',
            'send'                       => 'ส่ง',
            'no-result-found'            => 'ไม่พบผลลัพธ์',
            'add-new-contact'            => 'เพิ่มผู้ติดต่อใหม่',
            'description'                => 'คำอธิบาย',
            'search'                     => 'ค้นหา...',
            'add-new-lead'               => 'เพิ่มกลุ่มเป้าหมายใหม่',
            'create-new-contact'         => 'สร้างผู้ติดต่อใหม่',
            'save-contact'               => 'บันทึกผู้ติดต่อ
            ',
            'create-lead'                => 'สร้างกลุ่มเป้าหมาย',
            'linked-contact'             => 'ผู้ติดต่อที่ถูกเชื่อมโยงเข้ากับข้อมูล',
            'link-to-contact'            => 'เชื่อมโยงข้อมูลเข้ากับผู้ติดต่อ',
            'link-to-lead'               => 'เชื่อมโยงกับกลุ่มเป้าหมาย',
            'linked-lead'                => 'เชื่อมโยงข้อมูลกับกลุ่มเป้าหมาย',
            'lead-details'               => 'รายละเอียดกลุ่มเป้าหมาย',
            'contact-person'             => 'ผู้ติดต่อ',
            'product'                    => 'ผลิตภัณฑ์',

            'tags' => [
                'create-success'  => 'สร้างแท็กสำเร็จแล้ว.',
                'destroy-success' => 'ลบแท็กสำเร็จแล้ว.',
            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'select-country' => 'เลือกประเทศ',
            'select-state'   => 'เลือกจังหวัด',
            'state'          => 'จังหวัด',
            'city'           => 'เมือง',
            'postcode'       => 'รหัสไปรษณีย์',
            'work'           => 'งาน',
            'home'           => 'บ้าน',
            'add-more'       => 'เพิ่มข้อมูล',
            'select'         => 'เลือก',
            'country'        => 'ประเทศ',
            'address'        => 'ที่อยู่',
        ],
    ],

    'leads' => [
        'create-success'    => 'สร้างกลุ่มเป้าหมายสำเร็จแล้ว.',
        'update-success'    => 'อัปเดตกลุ่มเป้าหมายสำเร็จแล้ว.',
        'destroy-success'   => 'ลบกลุ่มเป้าหมายสำเร็จแล้ว.',
        'destroy-failed'    => 'ไม่สามารถกลุ่มเป้าหมายได้.',

        'index' => [
            'title'      => 'กลุ่มเป้าหมาย',
            'create-btn' => 'สร้างกลุ่มเป้าหมาย',

            'datagrid' => [
                'id'                  => 'เลขประจำตัว',
                'sales-person'        => 'ผู้ขาย',
                'subject'             => 'หัวเรื่อง',
                'source'              => 'แหล่งที่มา',
                'lead-value'          => 'มูลค่ากลุ่มเป้าหมาย',
                'lead-type'           => 'ประเภทกลุ่มเป้าหมาย',
                'tag-name'            => 'ชื่อแท็ก',
                'contact-person'      => 'ผู้ติดต่อ',
                'stage'               => 'ขั้นตอน',
                'rotten-lead'         => 'กลุ่มเป้าหมายหมดอายุแล้ว',
                'expected-close-date' => 'วันที่คาดว่าจะปิดการขาย',
                'created-at'          => 'สร้างเมื่อ',
                'no'                  => 'ไม่',
                'yes'                 => 'ใช่',
                'delete'              => 'ลบ',
                'mass-delete'         => 'ลบทั้งหมด',
                'mass-update'         => 'อัปเดตทั้งหมด',
            ],

            'kanban' => [
                'rotten-days'            => 'ลูกค้าเป้าหมายหมดอายุแล้ว :days วัน',
                'empty-list'             => 'ไม่มีรายการของกลุ่มเป้าหมาย',
                'empty-list-description' => 'สร้างกลุ่มเป้าหมายเพื่อจัดระเบียบเป้าหมายของคุณ.',
                'create-lead-btn'        => 'สร้างกลุ่มเป้าหมาย',

                'columns' => [
                    'contact-person'      => 'ผู้ติดต่อ',
                    'id'                  => 'เลขประจำตัว',
                    'lead-type'           => 'ประเภทกลุ่มเป้าหมาย',
                    'lead-value'          => 'มูลค่ากลุ่มเป้าหมาย',
                    'sales-person'        => 'ฝ่ายขาย',
                    'source'              => 'แหล่งที่มา',
                    'title'               => 'หัวเรื่อง',
                    'tags'                => 'แท็ก',
                    'expected-close-date' => 'วันที่คาดว่าจะปิดการขาย',
                    'created-at'          => 'สร้างเมื่อ',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'ค้นหา',
                    ],

                    'filters' => [
                        'apply-filters' => 'กรองข้อมูล',
                        'clear-all'     => 'ล้างทั้งหมด',
                        'filter'        => 'ตัวกรอง',
                        'filters'       => 'ตัวกรอง',
                        'select'        => 'เลือก',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'ขั้นตอนทั้งหมด',
                'create-new-pipeline' => 'สร้างขั้นตอนใหม่',
            ],
        ],

        'create' => [
            'title'          => 'สร้างกลุ่มเป้าหมาย',
            'save-btn'       => 'บันทึก',
            'details'        => 'รายละเอียด',
            'details-info'   => 'กรอกข้อมูลพื้นฐานของลูกค้าเป้าหมาย',
            'contact-person' => 'ผู้ติดต่อ',
            'contact-info'   => 'ข้อมูลเกี่ยวกับผู้ติดต่อ',
            'products'       => 'ผลิตภัณฑ์',
            'products-info'  => 'ข้อมูลเกี่ยวกับผลิตภัณฑ์',
        ],

        'edit' => [
            'title'          => 'แก้ไขกลุ่มเป้าหมาย',
            'save-btn'       => 'บันทึก',
            'details'        => 'รายละเอียด',
            'details-info'   => 'กรอกข้อมูลพื้นฐานของกลุ่มเป้าหมาย',
            'contact-person' => 'ผู้ติดต่อ',
            'contact-info'   => 'ข้อมูลเกี่ยวกับผู้ติดต่อ',
            'products'       => 'ผลิตภัณฑ์',
            'products-info'  => 'ข้อมูลเกี่ยวกับผลิตภัณฑ์',
        ],

        'common' => [
            'contact' => [
                'name'           => 'ชื่อ',
                'email'          => 'อีเมล',
                'contact-number' => 'เบอร์โทรศัพท์',
                'organization'   => 'องค์กร',
            ],

            'products' => [
                'product-name' => 'ชื่อผลิตภัณฑ์',
                'quantity'     => 'ปริมาณ',
                'price'        => 'ราคา',
                'amount'       => 'จำนวนเงิน',
                'action'       => 'การดำเนินการ',
                'add-more'     => 'เพิ่มข้อมูล',
                'total'        => 'รวม',
            ],
        ],

        'view' => [
            'title'       => 'เป้าหมาย: :title',
            'rotten-days' => ':days วัน',

            'tabs'        => [
                'description' => 'คำอธิบาย',
                'products'    => 'ผลิตภัณฑ์',
                'quotes'      => 'ใบเสนอราคา',
            ],

            'attributes' => [
                'title' => 'ข้อมูลเพิ่มเติม',
            ],

            'quotes' => [
                'subject'         => 'หัวเรื่อง',
                'expired-at'      => 'วันหมดอายุ',
                'sub-total'       => 'ยอดรวมย่อย',
                'discount'        => 'ส่วนลด',
                'tax'             => 'ภาษี',
                'adjustment'      => 'การปรับปรุง',
                'grand-total'     => 'ยอดรวมทั้งหมด',
                'delete'          => 'ลบ',
                'edit'            => 'แก้ไข',
                'download'        => 'ดาวโหลด',
                'destroy-success' => 'ลบใบเสนอราคาสำเร็จ.',
                'empty-title'     => 'ไม่พบใบเสนอราคา',
                'empty-info'      => 'ไม่พบใบเสนอราคาสำหรับลูกค้าเป้าหมายนี้',
                'add-btn'         => 'เพิ่มใบเสนอราคา',
            ],

            'products' => [
                'product-name' => 'ชื่อผลิตภัณฑ์',
                'quantity'     => 'ปริมาณ',
                'price'        => 'ราคา',
                'amount'       => 'จำนวนเงิน',
                'action'       => 'การดำเนินการ',
                'add-more'     => 'เพิ่มเติม',
                'total'        => 'รวม',
                'empty-title'  => 'ไม่พบผลิตภัณฑ์',
                'empty-info'   => 'ไม่พบผลิตภัณฑ์สำหรับลูกค้าเป้าหมายนี้',
                'add-product'  => 'เพิ่มผลิตภัณฑ์',
            ],

            'persons' => [
                'title'     => 'เกี่ยวกับบุคคล',
                'job-title' => ':job_title ที่ :organization',
            ],

            'stages' => [
                'won-lost'       => 'ชนะ/แพ้',
                'won'            => 'ชนะ',
                'lost'           => 'แพ้',
                'need-more-info' => 'ต้องการรายละเอียดเพิ่มเติม',
                'closed-at'      => 'ปิดเมื่อ',
                'won-value'      => 'มูลค่าที่ชนะ',
                'lost-reason'    => 'เหตุผลที่แพ้',
                'save-btn'       => 'บันทึก',
            ],

            'tags' => [
                'create-success'  => 'สร้างแท็กสำเร็จแล้ว.',
                'destroy-success' => 'ลบแท็กสำเร็จแล้ว.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'         => 'ย้อนกลับ',
            'save-btn'     => 'บันทึกการตั้งค่า',
            'save-success' => 'บันทึกการตั้งค่าสำเร็จแล้ว.',
            'search'       => 'ค้นหา',
            'title'        => 'การตั้งค่า',

            'general'  => [
                'title'   => 'ทั่วไป',
                'info'    => 'การตั้งค่าทั่วไป',

                'general' => [
                    'title'           => 'ทั่วไป',
                    'info'            => 'อัปเดตการตั้งค่าทั่วไปของคุณที่นี่.',
                    'locale-settings' => [
                        'title'       => 'การตั้งค่าภาษา',
                        'title-info'  => 'กำหนดภาษาที่ใช้ในส่วนต่อประสานผู้ใช้ เช่น อังกฤษ (en), ฝรั่งเศส (fr) หรือ ญี่ปุ่น (ja).',
                    ],
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'แดชบอร์ด',

            'revenue' => [
                'lost-revenue' => 'รายได้ที่เสียไป',
                'won-revenue'  => 'อัตรารายได้ที่ชนะ',
            ],

            'over-all' => [
                'average-lead-value'    => 'มูลค่าเฉลี่ยของลูกค้าเป้าหมาย',
                'total-leads'           => 'จำนวนลูกค้าทั้งหมด',
                'average-leads-per-day' => 'จำนวนลูกค้าเป้าหมายเฉลี่ยต่อวัน',
                'total-quotations'      => 'จำนวนใบเสนอราคาทั้งหมด',
                'total-persons'         => 'จำนวนบุคคลทั้งหมด',
                'total-organizations'   => 'จำนวนองค์กรทั้งหมด',
            ],

            'total-leads' => [
                'title' => 'กลุ่มเป้าหมาย',
                'total' => 'จำนวนลูกค้าเป้าหมายทั้งหมด',
                'won'   => 'ลูกค้าเป้าหมายที่ชนะ',
                'lost'  => 'ลูกค้าเป้าหมายที่แพ้',
            ],

            'revenue-by-sources' => [
                'title'       => 'รายได้ตามแหล่งที่มา',
                'empty-title' => 'ไม่มีข้อมูล',
                'empty-info'  => 'ไม่มีข้อมูลสำหรับช่วงเวลาที่เลือก',
            ],

            'revenue-by-types' => [
                'title'       => 'รายได้ตามประเภท',
                'empty-title' => 'ไม่มีข้อมูล',
                'empty-info'  => 'ไม่มีข้อมูลสำหรับช่วงเวลาที่เลือก',
            ],

            'top-selling-products' => [
                'title'       => 'ผลิตภัณฑ์ยอดนิยม',
                'empty-title' => 'ไม่พบผลิตภัณฑ์',
                'empty-info'  => 'ไม่มีผลิตภัณฑ์สำหรับช่วงเวลาที่เลือก',
            ],

            'top-persons' => [
                'title'       => 'บุคคลยอดนิยม',
                'empty-title' => 'ไม่พบบุคคล',
                'empty-info'  => 'ไม่มีบุคคลสำหรับช่วงเวลาที่เลือก',
            ],

            'open-leads-by-states' => [
                'title'       => 'ลูกค้าเป้าหมายเปิดตามสถานะ',
                'empty-title' => 'ไม่มีข้อมูล',
                'empty-info'  => 'ไม่มีข้อมูลสำหรับช่วงเวลาที่เลือก',
            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'เวอร์ชั่น: :version',
        'dashboard'            => 'แดชบอร์ด',
        'leads'                => 'กลุ่มเป้าหมาย',
        'quotes'               => 'ใบเสนอราคา',
        'quote'                => 'ใบเสนอราคา',
        'mail'                 => [
            'title'   => 'อีเมล',
            'compose' => 'เขียน',
            'inbox'   => 'กล่องขาเข้า',
            'draft'   => 'ร่าง',
            'outbox'  => 'กล่องขาออก',
            'sent'    => 'ส่งแล้ว',
            'trash'   => 'ถังขยะ',
            'setting' => 'ตั้งค่า',
        ],
        'activities'           => 'กิจกรรม',
        'contacts'             => 'ผู้ติดต่อ',
        'persons'              => 'บุคคล',
        'person'               => 'บุคคล',
        'organizations'        => 'องค์กร',
        'organization'         => 'องค์กร',
        'products'             => 'ผลิตภัณฑ์',
        'product'              => 'ผลิตภัณฑ์',
        'settings'             => 'ตั้งค่า',
        'user'                 => 'ผู้ใช้งาน',
        'user-info'            => 'จัดการผู้ใช้และสิทธิ์การเข้าถึงทั้งหมดของคุณในระบบ CRM.',
        'groups'               => 'กลุ่ม',
        'groups-info'          => 'เพิ่ม แก้ไข หรือลบกลุ่มจากระบบ CRM',
        'roles'                => 'บทบาท',
        'role'                 => 'บทบาท',
        'roles-info'           => 'เพิ่ม แก้ไข หรือลบบทบาทจากระบบ CRM',
        'users'                => 'ผู้ใช้งาน',
        'users-info'           => 'เพิ่ม แก้ไข หรือลบผู้ใช้จากระบบ CRM',
        'lead'                 => 'กลุ่มเป้าหมาย',
        'lead-info'            => 'จัดการการตั้งค่าที่เกี่ยวข้องกับลูกค้าเป้าหมายทั้งหมดในระบบ CRM',
        'pipelines'            => 'ขั้นตอน',
        'pipelines-info'       => 'เพิ่ม แก้ไข หรือลบขั้นตอนจาก CRM',
        'sources'              => 'แหล่งที่มาของข้อมูล',
        'sources-info'         => 'เพิ่ม แก้ไข หรือลบแหล่งที่มาจากระบบ CRM',
        'types'                => 'ประเภท',
        'types-info'           => 'เพิ่ม แก้ไข หรือลบประเภทจากระบบ CRM',
        'automation'           => 'อัตโนมัติ',
        'automation-info'      => 'จัดการการตั้งค่าที่เกี่ยวข้องกับระบบอัตโนมัติทั้งหมดใน CRM',
        'attributes'           => 'Attributes',
        'attribute'            => 'Attribute',
        'attributes-info'      => 'เพิ่ม แก้ไข หรือลบแอตทริบิวต์จากระบบ CRM',
        'email-templates'      => 'เทมเพลตอีเมล',
        'email'                => 'อีเมล',
        'email-templates-info' => ' เพิ่ม แก้ไข หรือลบเทมเพลตอีเมลจากระบบ CRM',
        'workflows'            => 'ขั้นตอนการทำงาน',
        'workflows-info'       => ' เพิ่ม แก้ไข หรือลบขั้นตอนการทำงานในระบบ CRM',
        'other-settings'       => 'การตั้งค่าอื่นๆ',
        'other-settings-info'  => 'จัดการการตั้งค่าเพิ่มเติมทั้งหมดในระบบ CRM',
        'tags'                 => 'แท็ก',
        'tags-info'            => ' เพิ่ม แก้ไข หรือลบแท็กจาก CRM',
        'my-account'           => 'บัญชีของฉัน',
        'sign-out'             => 'ออกจากระบบ',
        'back'                 => 'กลับ',
        'name'                 => 'ชื่อ',
        'configuration'        => 'การตั้งค่า',
        'activities'           => 'กิจกรรม',
        'howdy'                => 'สวัสดี!',
        'warehouses'           => 'คลังสินค้า',
        'warehouse'            => 'คลังสินค้า',
        'warehouses-info'      => 'เพิ่ม แก้ไข หรือลบคลังสินค้าจาก CRM',
    ],

    'user' => [
        'account' => [
            'name'                  => 'ชื่อ',
            'email'                 => 'อีเมล',
            'password'              => 'รหัสผ่าน',
            'my_account'            => 'บัญชีของฉัน',
            'update_details'        => 'อัปเดตรายละเอียด',
            'current_password'      => 'รหัสผ่าน',
            'confirm_password'      => 'ยืนยันรหัสผ่าน',
            'password-match'        => 'รหัสผ่านปัจจุบันไม่ตรงกัน.',
            'account-save'          => 'การเปลี่ยนแปลงบัญชีบันทึกสำเร็จแล้ว.',
            'permission-denied'     => 'ไม่อนุญาต',
            'remove-image'          => 'ลบรูปภาพ',
            'upload_image_pix'      => 'อัปโหลดรูปโปรไฟล์ (100px x 100px)',
            'upload_image_format'   => 'ในรูปแบบ PNG หรือ JPG',
            'image_upload_message'  => 'อนุญาตเฉพาะรูปภาพ (.jpeg, .jpg, .png, ...) เท่านั้น.',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'สวัสดี :name',
            'cheers' => 'ขอแสดงความนับถือ,</br> ทีม :app_name',
        ],
    ],

    'errors' => [
        'dashboard' => 'แดชบอร์ด',
        'go-back'   => 'ย้อนกลับ',
        'support'   => 'หากปัญหายังคงอยู่ โปรดติดต่อเราที่ <a href=":link" class=":class">:email</a> เพื่อขอความช่วยเหลือ',

        '404' => [
            'description' => 'ขออภัย! หน้าเว็บที่คุณกำลังมองหาไม่อยู่ในขณะนี้ ดูเหมือนว่าเราไม่พบสิ่งที่คุณกำลังค้นหา',
            'title'       => 'ไม่พบหน้าเว็บ 404',
        ],

        '401' => [
            'description' => 'ขออภัย! ดูเหมือนว่าคุณไม่มีสิทธิ์เข้าถึงหน้านี้ ดูเหมือนว่าคุณขาดข้อมูลประจำตัวที่จำเป็น',
            'title'       => '401 ไม่มีสิทธิ์ใช้งาน',
        ],

        '403' => [
            'description' => 'ขออภัย! หน้าเว็บนี้ถูกจำกัดการเข้าถึง ดูเหมือนว่าคุณไม่มีสิทธิ์ที่จำเป็นในการดูเนื้อหานี้',
            'title'       => '403 ไม่อนุญาต',
        ],

        '500' => [
            'description' => 'ขออภัย! เกิดข้อผิดพลาดบางอย่างขึ้น ดูเหมือนว่าเรากำลังมีปัญหาในการโหลดหน้าเว็บที่คุณกำลังมองหา',
            'title'       => '500 ข้อผิดพลาดของเซิร์ฟเวอร์ภายใน',
        ],

        '503' => [
            'description' => 'ขออภัย! ดูเหมือนว่าเรากำลังปิดปรับปรุงระบบชั่วคราว โปรดลองใหม่อีกครั้งในภายหลัง',
            'title'       => '503 บริการไม่พร้อมใช้งาน',
        ],
    ],
];
