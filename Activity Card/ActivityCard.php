<?php
namespace mod_uisandbox\section;

/** Standalone page for the Activity Card submission UI. */
class SubmissionActivityCard extends SubmissionElement {
    protected const CONTEXT_KEY = 'activitycard';
    protected const PAGE_TITLE = 'Activity Card';

    public function get_id(): string {
        return 'submission_activity_card';
    }
}
