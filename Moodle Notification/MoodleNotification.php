<?php
namespace mod_uisandbox\section;

/** Standalone page for the Moodle-rendered notification example. */
class SubmissionMoodleNotification extends SubmissionElement {

    public function get_id(): string {
        return 'submission_moodle_notification';
    }

    public function get_title(): string {
        return 'Moodle Notification';
    }

    public function render(\core_renderer $output): string {
        $notification = $output->notification(
            'This is Moodle\'s built-in error notification.',
            \core\output\notification::NOTIFY_ERROR
        );
        return $this->demo_block($output, $this->get_title(),
            $output->render_from_template('mod_uisandbox/SubmissionMoodleNotification', [
                'notification' => $notification,
            ]),
            'Rendered with Moodle\'s core notification renderer.');
    }
}
