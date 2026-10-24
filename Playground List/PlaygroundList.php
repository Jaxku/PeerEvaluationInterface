<?php
namespace mod_uisandbox\section;

/** Standalone page for the Playground List submission UI. */
class SubmissionPlaygroundList extends SubmissionElement {
    protected const CONTEXT_KEY = 'items';
    protected const PAGE_TITLE = 'Playground List';

    public function get_id(): string {
        return 'submission_playground_list';
    }
}
