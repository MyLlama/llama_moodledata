<?php

class __Mustache_2db8d1e6f0c396334e88f54c338de392 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="pb-4 pt-4" data-report-id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <form id="filtersform" name="filtersform" method="post" action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="hidden" name="submitted" value="true">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="filtersbuttons">
';
        if ($partial = $this->mustache->loadPartial('forumreport_summary/filter_dates')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('forumreport_summary/filter_groups')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '    <form id="exportlinkform" name="exportlinkform" method="post" action="#">
';
        $value = $context->find('discussionids');
        $buffer .= $this->section34aae5a52d9386e34b4dad555a3aa1fc($context, $indent, $value);
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('forumreport_summary/filter_dates_popover')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section302235a27ebac3d5d0e6dbe10d9a4921($context, $indent, $value);

        return $buffer;
    }

    private function section34aae5a52d9386e34b4dad555a3aa1fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <input type="hidden" name="discids[]" value="{{discid}}">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <input type="hidden" name="discids[]" value="';
                $value = $this->resolveValue($context->find('discid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section302235a27ebac3d5d0e6dbe10d9a4921(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'forumreport_summary/filters\'], function(Filters) {
    Filters.init(document.querySelector("[data-report-id=\'{{uniqid}}\']"));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'forumreport_summary/filters\'], function(Filters) {
';
                $buffer .= $indent . '    Filters.init(document.querySelector("[data-report-id=\'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\']"));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
