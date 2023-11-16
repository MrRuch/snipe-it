<?php

return [
    'about_assets_title'           => 'حول الأصول',
    'about_assets_text'            => 'الأصول هي العناصر التي يتم تتبعها بواسطة الرقم التسلسلي أو ترميز الأصل. وهي تميل إلى أن تكون ممتلكات ذات قيمة أعلى حيث انه من المهم توثيقها.',
    'archived'  				=> 'مؤرشفة',
    'asset'  					=> 'أصل',
    'bulk_checkout'             => 'إخراج الأصول',
    'bulk_checkin'              => 'ادخال الأصل',
    'checkin'  					=> 'ادخال الأصل',
    'checkout'  				=> 'اخراج الأصل',
    'clone'  					=> 'استنساخ الأصل',
    'deployable'  				=> 'قابل للتوزيع',
    'deleted'  					=> 'تم حذف هذا الأصل.',
    'delete_confirm'            => 'Are you sure you want to delete this asset?',
    'edit'  					=> 'تعديل الأصل',
    'model_deleted'  			=> 'تم حذف موديل الأصول هذا. يجب استعادة الموديل قبل أن تتمكن من استعادة الأصل.',
    'model_invalid'             => 'The Model of this Asset is invalid.',
    'model_invalid_fix'         => 'The Asset should be edited to correct this before attempting to check it in or out.',
    'requestable'               => 'قابل للطلب',
    'requested'				    => 'تم الطلب',
    'not_requestable'           => 'Not Requestable',
    'requestable_status_warning' => 'Do not change requestable status',
    'restore'  					=> 'استعادة الأصل',
    'pending'  					=> 'قيد الانتظار',
    'undeployable'  			=> 'غير قابل للتوزيع',
    'undeployable_tooltip'  	=> 'This asset has a status label that is undeployable and cannot be checked out at this time.',
    'view'  					=> 'عرض الأصل',
    'csv_error' => 'You have an error in your CSV file:',
    'import_text' => '
    <p>
    Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the Admin &gt; General Settings.
    </p>

    <p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p>

    <p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'Try to match users by firstname.lastname (jane.smith) format',
    'csv_import_match_initial_last' => 'Try to match users by first initial last name (jsmith) format',
    'csv_import_match_first' => 'Try to match users by first name (jane) format',
    'csv_import_match_email' => 'Try to match users by email as username',
    'csv_import_match_username' => 'Try to match users by username',
    'error_messages' => 'Error messages:',
    'success_messages' => 'Success messages:',
    'alert_details' => 'Please see below for details.',
    'custom_export' => 'Custom Export',
    'mfg_warranty_lookup' => ':manufacturer Warranty Status Lookup',
    'user_department' => 'User Department',
];
