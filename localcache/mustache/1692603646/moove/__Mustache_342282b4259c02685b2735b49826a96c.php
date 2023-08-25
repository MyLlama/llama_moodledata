<?php

class __Mustache_342282b4259c02685b2735b49826a96c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('addnewbutton');
        $buffer .= $this->section3764594701413ab260bd699c1f2d83da($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="d-flex ml-sm-auto">
';
        $value = $context->find('tools');
        $buffer .= $this->section14a0d80702c2122474a3d49997a0586d($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('tabjumps');
        $buffer .= $this->section39641967619ebbfc8a75ae816bcfbc18($context, $indent, $value);
        $value = $context->find('searchbox');
        $buffer .= $this->sectionBe1df542266704c434abc327073d3ac3($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3764594701413ab260bd699c1f2d83da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{> core/single_button }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9aaf7be7d06afad1889cb66222ffc0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="navitem">
                        {{> core/single_button}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB94340966883e697cfe129f56c37a9a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' exportentries, mod_glossary ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' exportentries, mod_glossary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65337c33a3aa96b3eab3e1fe0dc8b1c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'target="_blank"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'target="_blank"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3690e391741e25a88696d2110525da64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a class="dropdown-item" href="{{url}}"
                                    {{#openinnewwindow}}target="_blank"{{/openinnewwindow}}>{{string}}</a>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a class="dropdown-item" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                                    ';
                $value = $context->find('openinnewwindow');
                $buffer .= $this->section65337c33a3aa96b3eab3e1fe0dc8b1c9($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('string'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section964967988b61d890335b9f080b1f289e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="navitem">
                        <div class="dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ...
                                <span class="sr-only">{{#str}} exportentries, mod_glossary {{/str}}</span>
                            </button>
                            <div class="dropdown-menu">
                                {{#options}}
                                    <a class="dropdown-item" href="{{url}}"
                                    {{#openinnewwindow}}target="_blank"{{/openinnewwindow}}>{{string}}</a>
                                {{/options}}
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
                
                $buffer .= $indent . '                    <div class="navitem">
';
                $buffer .= $indent . '                        <div class="dropdown">
';
                $buffer .= $indent . '                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
                $buffer .= $indent . '                                ...
';
                $buffer .= $indent . '                                <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionB94340966883e697cfe129f56c37a9a9($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                            <div class="dropdown-menu">
';
                $value = $context->find('options');
                $buffer .= $this->section3690e391741e25a88696d2110525da64($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14a0d80702c2122474a3d49997a0586d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#button}}
                    <div class="navitem">
                        {{> core/single_button}}
                    </div>
                {{/button}}
                {{#select}}
                    <div class="navitem">
                        <div class="dropdown">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ...
                                <span class="sr-only">{{#str}} exportentries, mod_glossary {{/str}}</span>
                            </button>
                            <div class="dropdown-menu">
                                {{#options}}
                                    <a class="dropdown-item" href="{{url}}"
                                    {{#openinnewwindow}}target="_blank"{{/openinnewwindow}}>{{string}}</a>
                                {{/options}}
                            </div>
                        </div>
                    </div>
                {{/select}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('button');
                $buffer .= $this->sectionE9aaf7be7d06afad1889cb66222ffc0a($context, $indent, $value);
                $value = $context->find('select');
                $buffer .= $this->section964967988b61d890335b9f080b1f289e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39641967619ebbfc8a75ae816bcfbc18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{> core/url_select }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe1df542266704c434abc327073d3ac3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{> core/search_input }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/search_input')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
