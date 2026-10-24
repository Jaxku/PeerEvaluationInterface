<?php
namespace mod_uisandbox\section;

/** Shared page behavior for the separately addressable submission UI examples. */
abstract class SubmissionElement extends playground {

    /** Context key used by the template. */
    protected const CONTEXT_KEY = '';

    /** Human readable page title. */
    protected const PAGE_TITLE = '';

    public function get_id(): string {
        return 'submission_' . strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', static::class));
    }

    public function get_title(): string {
        return static::PAGE_TITLE;
    }

    public function render(\core_renderer $output): string {
        if (static::class === SubmissionPlaygroundList::class) {
            global $PAGE;
            $PAGE->requires->js_call_amd('mod_uisandbox/playground', 'init');
        }
        $context = $this->get_template_context();
        $key = static::CONTEXT_KEY;
        $data = [$key => $context[$key]];
        if (static::class === SubmissionPlaygroundList::class) {
            $data['heading'] = $context['heading'];
        }
        $templatename = (new \ReflectionClass(static::class))->getShortName();
        $template = 'mod_uisandbox/' . $templatename;
        return $this->demo_block($output, static::PAGE_TITLE,
            $output->render_from_template($template, $data),
            'Standalone submission UI example. This is presentation markup only; it does not save or submit data.');
    }
}
