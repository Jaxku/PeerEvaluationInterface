<?php
namespace mod_uisandbox\section;

/** Standalone page for the Anonymous Submission Option submission UI. */
class SubmissionAnonymousOption extends SubmissionElement {
    protected const CONTEXT_KEY = 'anonymous';
    protected const PAGE_TITLE = 'Anonymous Submission Option';

    public function get_id(): string {
        return 'submission_anonymous_option';
    }
}
