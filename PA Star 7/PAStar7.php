<?php

namespace mod_uisandbox\section;

class PAStar7 extends base {

    public function get_id(): string {
        return 'pa_star7';
    }

    public function get_title(): string {
        return get_string('section_pa_star7', 'mod_uisandbox');
    }

    public function render(\core_renderer $output): string {
        return $output->render_from_template(
            'mod_uisandbox/PAStar7',
            $this->get_template_context()
        );
    }

    private function get_template_context(): array {
        $ratings = [
            [ 'descriptor' => 'Did not contribute'],
            [ 'descriptor' => 'Barely contributed'],
            [ 'descriptor' => 'Contributed some'],
            [ 'descriptor' => 'Adequate contribution'],
            [ 'descriptor' => 'Good contribution'],
            [ 'descriptor' => 'Excellent contribution'],
            [ 'descriptor' => 'Above and beyond contribution'],
        ];

        return [
            'assessment_title' => 'Peer Assessment',

            'assessment_description' =>
                'How impactful was each group member’s contribution to the group project? ' .
                'Consider the quality of their ideas, ability to work with the team, ' .
                'and the results they produced for the project.',

            'peers' => [
                [
                    'name' => 'Jerry Jones',
                    'ratings' => $ratings,
                ],
                [
                    'name' => 'Max Garlic',
                    'ratings' => $ratings,
                ],
                [
                    'name' => 'Charles Decker',
                    'ratings' => $ratings,
                ],
            ],
        ];
    }
}
