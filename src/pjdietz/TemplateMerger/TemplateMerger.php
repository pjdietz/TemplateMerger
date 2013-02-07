<?php

namespace pjdietz\TemplateMerger;

class TemplateMerger
{
    public $fields;

    public function __construct($fields = null)
    {
        if (!is_null($fields) && is_array($fields)) {
            $this->fields = $fields;
        } else {
            $this->fields = $fields;
        }
    }

    /**
     * Merge an associative array into a string template.
     *
     * @param string $template
     * @param array $fields
     * @return string
     */
    public function merge($template, $fields = null)
    {
        if (!is_null($fields) && is_array($fields)) {
            $mergeFields = array_merge($this->fields, $fields);
        } else {
            $mergeFields = $this->fields;
        }

        return str_replace(
            array_keys($mergeFields),
            array_values($mergeFields),
            $template);
    }

}
