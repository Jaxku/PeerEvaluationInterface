<?php

namespace mod_uisandbox\section;

class PAStar10 extends base {

    public function get_id(): string {
        return 'pa_star10';
    }

    public function get_title(): string {
        return get_string('section_pa_star10', 'mod_uisandbox');
    }

    public function render(\core_renderer $output): string {
        return $output->render_from_template(
            'mod_uisandbox/PAStar10',
            $this->get_template_context()
        );
    }

    private function get_template_context(): array {
        $ratings = [
            ['value' => 0, 'descriptor' => 'They did nothing'],
            ['value' => 1, 'descriptor' => 'Did not contribute nearly enough'],
            ['value' => 2, 'descriptor' => 'Did not contribute enough'],
            ['value' => 3, 'descriptor' => 'Contributed barely enough'],
            ['value' => 4, 'descriptor' => 'Should have contributed more'],
            ['value' => 5, 'descriptor' => 'Adequate contribution'],
            ['value' => 6, 'descriptor' => 'Good contribution'],
            ['value' => 7, 'descriptor' => 'Excellent contribution'],
            ['value' => 8, 'descriptor' => 'Outstanding contribution'],
            ['value' => 9, 'descriptor' => 'Above and beyond contribution'],
            ['value' => 10, 'descriptor' => 'Could not have done any better'],
        ];

        return [
            'assessment_title' => 'Peer Assessment',

            'assessment_description' =>
                'How impactful was each group member’s contribution to the group project? ' .
                'Consider the quality of their ideas, ability to work with the team, ' .
                'and the results they produced for the project.',

            'peers' => [
                [
                    'name' => 'Jerry J.',
                    'ratings' => $ratings,
                ],
                [
                    'name' => 'Max G.',
                    'ratings' => $ratings,
                ],
            ],
        ];
    }
}
