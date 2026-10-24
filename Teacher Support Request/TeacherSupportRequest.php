<?php
namespace mod_uisandbox\section;

/** Standalone page for the Teacher Support Request submission UI. */
class SubmissionTeacherSupportRequest extends SubmissionElement {
    protected const CONTEXT_KEY = 'helprequest';
    protected const PAGE_TITLE = 'Teacher Support Request';

    public function get_id(): string {
        return 'submission_teacher_support_request';
    }
}
