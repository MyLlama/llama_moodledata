<?php

class __Mustache_be90b380bb6efdf9333cfcba5c65e92a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core_analytics/notification_styles')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $value = $context->find('body');
        $buffer .= $this->sectionFec1faaed3786dce1cd4d83b5e17c8fe($context, $indent, $value);
        $buffer .= $indent . '<br/>
';
        $buffer .= $indent . '
';
        $value = $context->find('actions');
        $buffer .= $this->sectionBc3f4ae4aa758280b25d982f4eed7c20($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('usefulbuttons');
        $buffer .= $this->section62313398ff6b49b4dab6fb954a35e3bc($context, $indent, $value);

        return $buffer;
    }

    private function sectionFec1faaed3786dce1cd4d83b5e17c8fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{.}}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc3f4ae4aa758280b25d982f4eed7c20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class="btn btn-outline-primary mr-3 mb-3 btn-insight" href="{{url}}">{{text}}</a><br/><br/>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a class="btn btn-outline-primary mr-3 mb-3 btn-insight" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a><br/><br/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21a8f42f74fd4010b2950128f58b9540(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' washelpful, analytics ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' washelpful, analytics ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d56240b217f929d4677ce34bb80d3a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'yes';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'yes';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0ac7f20e9de08dda74d7d5716455c77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'no';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'no';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62313398ff6b49b4dab6fb954a35e3bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        {{! Using target blank for these actions as they only return a small notification.}}
        <strong>{{#str}} washelpful, analytics {{/str}}</strong>
        <a href="{{usefulurl}}" target="_blank" class="btn-insight btn btn-outline-primary">{{#str}}yes{{/str}}</a>
        <a href="{{notusefulurl}}" target="_blank" class="btn-insight btn btn-outline-primary">{{#str}}no{{/str}}</a>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section21a8f42f74fd4010b2950128f58b9540($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('usefulurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" class="btn-insight btn btn-outline-primary">';
                $value = $context->find('str');
                $buffer .= $this->section0d56240b217f929d4677ce34bb80d3a8($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('notusefulurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" class="btn-insight btn btn-outline-primary">';
                $value = $context->find('str');
                $buffer .= $this->sectionD0ac7f20e9de08dda74d7d5716455c77($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
