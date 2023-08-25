<?php

class __Mustache_6cee9d376f502f139851e72262f7c018 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<br />
';
        $buffer .= $indent . '<div class="d-inline-block w-100">
';
        $value = $context->find('showbulkactions');
        $buffer .= $this->section2ada09bfad5bc8bc62b8975c75c8db51($context, $indent, $value);
        $buffer .= $indent . '    <div class="float-right">
';
        $value = $context->find('perpage');
        $buffer .= $this->sectionB84bb82a13f41470afcb67b4f4fa5ab3($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section903027eafb4c713d3b6ac3520d10756a($context, $indent, $value);

        return $buffer;
    }

    private function section4d1ac1c4027c854e608bab56234bc838(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'withselectedusers';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'withselectedusers';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6805fd502f1e55bd3a63b02c625bf221(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84fb5db6020dd141975de07f0dc66506(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'choosedots';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'choosedots';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58478270510605c7de68c8bf495c26c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option value="{{value}}">{{name}}</option>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ada09bfad5bc8bc62b8975c75c8db51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="buttons float-left">
        <div class="form-inline pl-1">
            <label for="{{id}}">{{#str}}withselectedusers{{/str}}</label>
            <select id="{{id}}" class="select custom-select ml-4" {{#attributes}}{{name}}="{{value}}" {{/attributes}}>
                <option value="">{{#str}}choosedots{{/str}}</option>
                {{#actions}}
                <option value="{{value}}">{{name}}</option>
                {{/actions}}
            </select>
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="buttons float-left">
';
                $buffer .= $indent . '        <div class="form-inline pl-1">
';
                $buffer .= $indent . '            <label for="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section4d1ac1c4027c854e608bab56234bc838($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '            <select id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="select custom-select ml-4" ';
                $value = $context->find('attributes');
                $buffer .= $this->section6805fd502f1e55bd3a63b02c625bf221($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <option value="">';
                $value = $context->find('str');
                $buffer .= $this->section84fb5db6020dd141975de07f0dc66506($context, $indent, $value);
                $buffer .= '</option>
';
                $value = $context->find('actions');
                $buffer .= $this->section58478270510605c7de68c8bf495c26c8($context, $indent, $value);
                $buffer .= $indent . '            </select>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB84bb82a13f41470afcb67b4f4fa5ab3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core/single_select}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/single_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section903027eafb4c713d3b6ac3520d10756a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_message/message_send_bulk\', \'core/custom_interaction_events\'], function($, BulkSender, CustomEvents) {
    CustomEvents.define(\'#{{id}}\', [CustomEvents.events.accessibleChange]);
    $(\'#{{id}}\').on(CustomEvents.events.accessibleChange, function(e) {
        var action = $(e.target).val();
        if (action.indexOf(\'#\') !== -1) {
            e.preventDefault();

            var ids = $(\'#summaryreport input.usercheckbox:checked\').map(function(index, element) {
                return element.name.replace(\'user\', \'\');
            }).get();

            if (action == \'#messageselect\') {
                BulkSender.showModal(ids, function() {
                    $(\'#{{id}}\').focus();
                });
            }

            $(\'#{{id}} option[value=""]\').prop(\'selected\', \'selected\');
        }
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'core_message/message_send_bulk\', \'core/custom_interaction_events\'], function($, BulkSender, CustomEvents) {
';
                $buffer .= $indent . '    CustomEvents.define(\'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', [CustomEvents.events.accessibleChange]);
';
                $buffer .= $indent . '    $(\'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\').on(CustomEvents.events.accessibleChange, function(e) {
';
                $buffer .= $indent . '        var action = $(e.target).val();
';
                $buffer .= $indent . '        if (action.indexOf(\'#\') !== -1) {
';
                $buffer .= $indent . '            e.preventDefault();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            var ids = $(\'#summaryreport input.usercheckbox:checked\').map(function(index, element) {
';
                $buffer .= $indent . '                return element.name.replace(\'user\', \'\');
';
                $buffer .= $indent . '            }).get();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            if (action == \'#messageselect\') {
';
                $buffer .= $indent . '                BulkSender.showModal(ids, function() {
';
                $buffer .= $indent . '                    $(\'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\').focus();
';
                $buffer .= $indent . '                });
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            $(\'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' option[value=""]\').prop(\'selected\', \'selected\');
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
