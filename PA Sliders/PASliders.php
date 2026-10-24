<?php

namespace mod_uisandbox\section;

class PASliders extends base {

    public function get_id(): string {
        return 'pa_sliders';
    }

    public function get_title(): string {
        return get_string('section_pa_sliders', 'mod_uisandbox');
    }

    public function render(\core_renderer $output): string {
        return $output->render_from_template(
            'mod_uisandbox/PASliders',
            $this->get_template_context()
        );
    }

    private function get_template_context(): array {
        return [
            'assessment_title' => 'Peer Assessment',

            'assessment_description' =>
                'How would you grade your peers on how well they contributed to the project? ' .
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