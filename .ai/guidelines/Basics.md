Here's Basic Models for the application regard enum make sure to use full compatiable filament enum class with label and icons and colors if needed also with use __() function.
**families**

Columns:

* id
* code
* name
* primary_contact_name
* primary_contact_phone
* secondary_contact_phone
* national_id
* governorate
* city
* district
* address
* housing_status
* monthly_income
* members_count
* notes
* status
* created_at
* updated_at
* deleted_at

Enum values:

* housing_status: owned, rented, shared, temporary, homeless, other
* status: active, inactive, archived

Relationships:

* hasMany familyMembers
* hasMany charityCases
* hasMany documents
* hasMany donationTargets
* hasMany donationAllocations

**family_members**

Columns:

* id
* family_id
* name
* relation_to_head
* gender
* birth_date
* marital_status
* education_status
* employment_status
* health_status
* monthly_income
* national_id
* phone
* notes
* created_at
* updated_at
* deleted_at

Enum values:

* relation_to_head: head, spouse, son, daughter, father, mother, brother, sister, other
* gender: male, female
* marital_status: single, married, divorced, widowed
* education_status: none, primary, preparatory, secondary, diploma, university, postgraduate
* employment_status: unemployed, employed, self_employed, retired, student, unable_to_work
* health_status: healthy, chronic_illness, disabled, critical, other

Relationships:

* belongsTo family

**case_types**

Columns:

* id
* name
* code
* description
* is_active
* created_at
* updated_at

Enum values:

* none

Relationships:

* hasMany charityCases

**charity_cases**

Columns:

* id
* family_id
* case_type_id
* code
* title
* description
* priority
* status
* visit_status
* registered_at
* reviewed_at
* approved_at
* closed_at
* last_visit_at
* next_visit_at
* requested_amount
* approved_amount
* notes
* created_at
* updated_at
* deleted_at

Enum values:

* priority: low, medium, high, urgent
* status: draft, pending_review, need_more_info, approved, rejected, scheduled, in_progress, completed, closed, canceled
* visit_status: not_required, pending, scheduled, completed, overdue

Relationships:

* belongsTo family
* belongsTo caseType
* hasMany visits
* hasMany documents
* hasMany assistanceSchedules
* hasMany donationTargets
* hasMany donationAllocations

**visits**

Columns:

* id
* charity_case_id
* visit_type
* status
* scheduled_at
* visited_at
* summary
* findings
* recommendations
* next_visit_at
* notes
* created_at
* updated_at
* deleted_at

Enum values:

* visit_type: field_visit, office_interview, phone_call, follow_up, reassessment
* status: scheduled, completed, canceled, missed, postponed

Relationships:

* belongsTo charityCase

**documents**

Columns:

* id
* family_id
* charity_case_id
* type
* category
* title
* file_path
* file_name
* mime_type
* file_size
* visibility
* issued_at
* expires_at
* is_required
* is_verified
* notes
* created_at
* updated_at
* deleted_at

Enum values:

* type: national_id, birth_certificate, marriage_certificate, death_certificate, income_proof, rent_contract, utility_bill, medical_report, prescription, committee_decision, social_research, photo, other
* category: identity, housing, financial, medical, legal, social_research, committee, other
* visibility: family_only, case_only, shared

Relationships:

* belongsTo family
* belongsTo charityCase

**assistance_types**

Columns:

* id
* name
* code
* description
* unit_type
* is_recurring_allowed
* is_active
* created_at
* updated_at

Enum values:

* unit_type: amount, item, service

Relationships:

* hasMany assistanceSchedules

**assistance_schedules**

Columns:

* id
* charity_case_id
* assistance_type_id
* scheduled_date
* scheduled_time
* amount
* quantity
* frequency
* status
* funding_status
* notes
* created_at
* updated_at
* deleted_at

Enum values:

* frequency: once, daily, weekly, monthly, quarterly, yearly, custom
* status: draft, scheduled, approved, in_progress, completed, postponed, canceled, failed
* funding_status: unfunded, partially_funded, funded

Relationships:

* belongsTo charityCase
* belongsTo assistanceType
* hasMany assistanceDeliveries
* hasMany donationAllocations

**assistance_deliveries**

Columns:

* id
* assistance_schedule_id
* delivered_at
* delivery_status
* received_by_name
* received_by_phone
* proof_file_path
* notes
* created_at
* updated_at
* deleted_at

Enum values:

* delivery_status: pending, delivered, partially_delivered, failed, canceled, returned

Relationships:

* belongsTo assistanceSchedule

**donation_targets**

Columns:

* id
* type
* family_id
* charity_case_id
* title
* slug
* description
* goal_amount
* collected_amount
* status
* starts_at
* ends_at
* created_at
* updated_at
* deleted_at

Enum values:

* type: family, case, campaign
* status: draft, active, paused, completed, archived

Relationships:

* belongsTo family
* belongsTo charityCase
* hasMany donations
* hasMany donationAllocations

**donations**

Columns:

* id
* donation_target_id
* donor_name
* donor_email
* donor_phone
* amount
* currency
* status
* payment_gateway
* payment_method
* transaction_id
* paid_at
* anonymous
* notes
* created_at
* updated_at
* deleted_at

Enum values:

* currency: EGP, USD, SAR
* status: pending, paid, failed, refunded, canceled
* payment_gateway: paymob, stripe, fawry, manual, other
* payment_method: card, wallet, bank_transfer, cash, kiosk, other

Relationships:

* belongsTo donationTarget
* hasMany donationAllocations

**donation_allocations**

Columns:

* id
* donation_id
* donation_target_id
* family_id
* charity_case_id
* assistance_schedule_id
* amount
* allocation_status
* allocated_at
* notes
* created_at
* updated_at
* deleted_at

Enum values:

* allocation_status: pending, allocated, reversed

Relationships:

* belongsTo donation
* belongsTo donationTarget
* belongsTo family
* belongsTo charityCase
* belongsTo assistanceSchedule

**relationships summary**

* Family hasMany FamilyMember

* Family hasMany CharityCase

* Family hasMany Document

* Family hasMany DonationTarget

* Family hasMany DonationAllocation

* CharityCase belongsTo Family

* CharityCase belongsTo CaseType

* CharityCase hasMany Visit

* CharityCase hasMany Document

* CharityCase hasMany AssistanceSchedule

* CharityCase hasMany DonationTarget

* CharityCase hasMany DonationAllocation

* Visit belongsTo CharityCase

* Document belongsTo Family nullable

* Document belongsTo CharityCase nullable

* AssistanceSchedule belongsTo CharityCase

* AssistanceSchedule belongsTo AssistanceType

* AssistanceSchedule hasMany AssistanceDelivery

* AssistanceSchedule hasMany DonationAllocation

* AssistanceDelivery belongsTo AssistanceSchedule

* DonationTarget belongsTo Family nullable

* DonationTarget belongsTo CharityCase nullable

* DonationTarget hasMany Donation

* DonationTarget hasMany DonationAllocation

* Donation belongsTo DonationTarget nullable

* Donation hasMany DonationAllocation

* DonationAllocation belongsTo Donation

* DonationAllocation belongsTo DonationTarget nullable

* DonationAllocation belongsTo Family nullable

* DonationAllocation belongsTo CharityCase nullable

* DonationAllocation belongsTo AssistanceSchedule nullable
