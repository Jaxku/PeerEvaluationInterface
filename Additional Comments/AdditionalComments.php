<?php
namespace mod_uisandbox\section;

/** Standalone page for the Additional Comments submission UI. */
class SubmissionAdditionalComments extends SubmissionElement {
    protected const CONTEXT_KEY = 'extracomment';
    protected const PAGE_TITLE = 'Additional Comments';

    public function get_id(): string {
        return 'submission_additional_comments';
    }
}
