<?php
namespace mod_uisandbox\section;

/** Standalone page for the Individual Contributions submission UI. */
class SubmissionIndividualContributions extends SubmissionElement {
    protected const CONTEXT_KEY = 'contributions';
    protected const PAGE_TITLE = 'Individual Contributions';

    public function get_id(): string {
        return 'submission_individual_contributions';
    }
}
