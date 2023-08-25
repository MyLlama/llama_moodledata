<?php

class __Mustache_4b9457a8cdcd0fb7db58e416752200a3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('hasgroups');
        $buffer .= $this->sectionE8d55e9b75ad5a86af9246cf5cd6117d($context, $indent, $value);

        return $buffer;
    }

    private function section8646a0d8523387bc1facf53abb00a85b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' filter:groupsbuttonlabel, forumreport_summary ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' filter:groupsbuttonlabel, forumreport_summary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6bbc8e340ee0a0d1fcb32ab02369f61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked="checked" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' checked="checked" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ce072f38916a7ebde8ab4b1d58d60f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <input id="filtergroups{{groupid}}" class="form-check-input" type="checkbox" name="filtergroups[]"
        value="{{groupid}}" {{#checked}} checked="checked" {{/checked}}>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <input id="filtergroups';
                $value = $this->resolveValue($context->find('groupid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="form-check-input" type="checkbox" name="filtergroups[]"
';
                $buffer .= $indent . '        value="';
                $value = $this->resolveValue($context->find('groupid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('checked');
                $buffer .= $this->sectionB6bbc8e340ee0a0d1fcb32ab02369f61($context, $indent, $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB787b3a8e973e998001b6d3265bfb964(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' filter:groupsname, forumreport_summary ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' filter:groupsname, forumreport_summary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section426b778e88b886dbe99f4c0ef9dbe77e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <input id="popperfiltergroups{{groupid}}" class="form-check-input" type="checkbox" name="popperfiltergroups[]"
                data-saveid="filtergroups{{groupid}}" value="{{groupid}}" {{#checked}} checked="checked" {{/checked}}>
            <label class="form-check-label pt-1" for="popperfiltergroups{{groupid}}">{{groupname}}</label>
            <br>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <input id="popperfiltergroups';
                $value = $this->resolveValue($context->find('groupid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="form-check-input" type="checkbox" name="popperfiltergroups[]"
';
                $buffer .= $indent . '                data-saveid="filtergroups';
                $value = $this->resolveValue($context->find('groupid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('groupid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('checked');
                $buffer .= $this->sectionB6bbc8e340ee0a0d1fcb32ab02369f61($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '            <label class="form-check-label pt-1" for="popperfiltergroups';
                $value = $this->resolveValue($context->find('groupid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('groupname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>
';
                $buffer .= $indent . '            <br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section43655405fc6a05d2320c48d4d567876a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectall ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectall ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33d3390b59e3e80808d60e73afc693c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clear ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' clear ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67ff6294eae5b56bee5bc66aaa93b70d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' save ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' save ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8d55e9b75ad5a86af9246cf5cd6117d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button type="button" id="filter-groups-button" class="btn btn-primary rounded p-1 ml-2" aria-expanded="false"
        aria-haspopup="true" aria-label="{{# str}} filter:groupsbuttonlabel, forumreport_summary {{/ str}}">
    {{filtergroupsname}}
</button>

{{! Groups filter values to submit }}
<div class="hidden">
    {{#filtergroups}}
    <input id="filtergroups{{groupid}}" class="form-check-input" type="checkbox" name="filtergroups[]"
        value="{{groupid}}" {{#checked}} checked="checked" {{/checked}}>
    {{/filtergroups}}
</div>

{{! Groups filter popover }}
<div id="filter-groups-popover" class="popover mt-3 hidden" data-openfilter="false">
    <h3 class="popover-header">{{# str}} filter:groupsname, forumreport_summary {{/ str}}</h3>
    <div class="popover-body" data-region="filter-groups">
        <div class="form-check filter-scrollable">
            {{#filtergroups}}
            <input id="popperfiltergroups{{groupid}}" class="form-check-input" type="checkbox" name="popperfiltergroups[]"
                data-saveid="filtergroups{{groupid}}" value="{{groupid}}" {{#checked}} checked="checked" {{/checked}}>
            <label class="form-check-label pt-1" for="popperfiltergroups{{groupid}}">{{groupname}}</label>
            <br>
            {{/filtergroups}}
        </div>
        <div class="filter-actions">
            <button type="button" class="select-all btn btn-link p-0 pr-1" aria-label="{{# str}} selectall {{/ str}}">{{# str}} selectall {{/ str}}</button>
            <div class="float-right">
                <button type="button" class="filter-clear btn btn-link p-0 px-1" aria-label="{{# str}} clear {{/ str}}">{{# str}} clear {{/ str}}</button>
                <button type="button" class="filter-save btn btn-link p-0" aria-label="{{# str}} save {{/ str}}">
                    <strong>{{# str}} save {{/ str}}</strong>
                </button>
            </div>
        </div>
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<button type="button" id="filter-groups-button" class="btn btn-primary rounded p-1 ml-2" aria-expanded="false"
';
                $buffer .= $indent . '        aria-haspopup="true" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section8646a0d8523387bc1facf53abb00a85b($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('filtergroupsname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '</button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="hidden">
';
                $value = $context->find('filtergroups');
                $buffer .= $this->section3ce072f38916a7ebde8ab4b1d58d60f9($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div id="filter-groups-popover" class="popover mt-3 hidden" data-openfilter="false">
';
                $buffer .= $indent . '    <h3 class="popover-header">';
                $value = $context->find('str');
                $buffer .= $this->sectionB787b3a8e973e998001b6d3265bfb964($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '    <div class="popover-body" data-region="filter-groups">
';
                $buffer .= $indent . '        <div class="form-check filter-scrollable">
';
                $value = $context->find('filtergroups');
                $buffer .= $this->section426b778e88b886dbe99f4c0ef9dbe77e($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="filter-actions">
';
                $buffer .= $indent . '            <button type="button" class="select-all btn btn-link p-0 pr-1" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section43655405fc6a05d2320c48d4d567876a($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section43655405fc6a05d2320c48d4d567876a($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '            <div class="float-right">
';
                $buffer .= $indent . '                <button type="button" class="filter-clear btn btn-link p-0 px-1" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section33d3390b59e3e80808d60e73afc693c8($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section33d3390b59e3e80808d60e73afc693c8($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                <button type="button" class="filter-save btn btn-link p-0" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section67ff6294eae5b56bee5bc66aaa93b70d($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <strong>';
                $value = $context->find('str');
                $buffer .= $this->section67ff6294eae5b56bee5bc66aaa93b70d($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
