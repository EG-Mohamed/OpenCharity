<?php

namespace App\Observers;

use App\Enums\DeliveryStatus;
use App\Enums\ScheduleStatus;
use App\Models\AssistanceDelivery;

class AssistanceDeliveryObserver
{
    public function saved(AssistanceDelivery $assistanceDelivery): void
    {
        $assistanceSchedule = $assistanceDelivery->assistanceSchedule;

        if (! $assistanceSchedule) {
            return;
        }

        $assistanceSchedule->updateQuietly([
            'status' => match ($assistanceDelivery->delivery_status) {
                DeliveryStatus::Delivered => ScheduleStatus::Completed,
                DeliveryStatus::PartiallyDelivered => ScheduleStatus::InProgress,
                DeliveryStatus::Pending => ScheduleStatus::Scheduled,
                DeliveryStatus::Failed => ScheduleStatus::Failed,
                DeliveryStatus::Canceled => ScheduleStatus::Canceled,
                DeliveryStatus::Returned => ScheduleStatus::Postponed,
            },
        ]);
    }
}
