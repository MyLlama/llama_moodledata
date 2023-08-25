<?php

class __Mustache_9497e24460f1358b2636f0074570246e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="calendar-day-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-template="core_calendar/day_detailed">
';
        if ($partial = $this->mustache->loadPartial('core_calendar/header')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('core_calendar/day_detailed')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section75da8b3b0dcee6a8b0e4365024409737($context, $indent, $value);

        return $buffer;
    }

    private function section75da8b3b0dcee6a8b0e4365024409737(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
    CalendarView.init($("#calendar-day-{{uniqid}}"), \'day\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'core_calendar/calendar_view\'], function($, CalendarView) {
';
                $buffer .= $indent . '    CalendarView.init($("#calendar-day-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"), \'day\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
