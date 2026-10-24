<?php
namespace mod_uisandbox\section;

/** Standalone page for the Notices submission UI. */
class SubmissionNotices extends SubmissionElement {
    protected const CONTEXT_KEY = 'messages';
    protected const PAGE_TITLE = 'Notices';

    public function get_id(): string {
        return 'submission_notices';
    }
}
