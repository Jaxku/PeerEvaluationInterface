<?php

namespace mod_uisandbox\section;

class PASlider100 extends base {

    public function get_id(): string {
        return 'pa_slider100';
    }

    public function get_title(): string {
        return get_string('section_pa_slider100', 'mod_uisandbox');
    }

    public function render(\core_renderer $output): string {
        return $output->render_from_template(
            'mod_uisandbox/PASlider100',
            $this->get_template_context()
        );
    }

    private function get_template_context(): array {
        $ratings = [
            ['value' => 1, 'descriptor' => 'Did not contribute'],
            ['value' => 2, 'descriptor' => 'Barely contributed'],
            ['value' => 3, 'descriptor' => 'Contributed some'],
            ['value' => 4, 'descriptor' => 'Adequate contribution'],
            ['value' => 5, 'descriptor' => 'Good contribution'],
            ['value' => 6, 'descriptor' => 'Excellent contribution'],
            ['value' => 7, 'descriptor' => 'Above and beyond contribution'],
        ];

        return [
            'assessment_title' => 'Peer Assessment',

            'assessment_description' =>
                'How would you distribute your peer contributions to the group project? ' .
                'Consider the quality of their ideas, ability to work with the team, ' .
                'and the results they produced for the project.',


            'peers' => [
                [
                    'name' => 'Jerry Jones',
                ],
                [
                    'name' => 'Max Garlic',
                ],
                [
                    'name' => 'Charles Decker',
                ],
                [
                    'name' => 'Harry Waters',
                ],
            ],
        ];
    }
}
