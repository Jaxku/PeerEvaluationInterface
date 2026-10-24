<?php
namespace mod_uisandbox\section;

/** Standalone page for the Peer Evaluation Ratings submission UI. */
class SubmissionPeerRatings extends SubmissionElement {
    protected const CONTEXT_KEY = 'rating';
    protected const PAGE_TITLE = 'Peer Evaluation Ratings';

    public function get_id(): string {
        return 'submission_peer_ratings';
    }
}
