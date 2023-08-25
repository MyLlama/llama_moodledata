<?php

class __Mustache_3a23211d1f4ca9873117e8eb4c5c2df9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_moove/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('theme_moove/accessibilitybar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers drag-container">
';
        $buffer .= $indent . '        <div id="topofscroll" class="main-inner">
';
        $buffer .= $indent . '            <div id="page-content" class="d-print-block">
';
        $buffer .= $indent . '                <div id="region-main-box">
';
        $buffer .= $indent . '                    <div class="row">
';
        $buffer .= $indent . '                        <div class="col-md-4">
';
        $buffer .= $indent . '                            <div class="card card-body card-profile">
';
        $buffer .= $indent . '                                <div class="userpicture">
';
        $buffer .= $indent . '                                    <img src="';
        $value = $this->resolveValue($context->find('userpicture'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" alt="';
        $value = $this->resolveValue($context->find('userfullname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <h3>';
        $value = $this->resolveValue($context->find('userfullname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <div class="headerbuttons">
';
        $value = $context->find('headerbuttons');
        $buffer .= $this->sectionC9eff38bef66f8027f56251c74f3127f($context, $indent, $value);
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('editprofileurl');
        $buffer .= $this->sectionEc79f2c10db27d3aa9913fe4c11abe1b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <div class="userinfo my-2">
';
        $value = $context->find('userdescription');
        $buffer .= $this->section4d5170b4c85dff40d37dc90942285f7c($context, $indent, $value);
        $value = $context->find('usercanviewprofile');
        $buffer .= $this->section315b838f6a35f5fea595f8942f212b85($context, $indent, $value);
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-md-8">
';
        $buffer .= $indent . '                            <section id="region-main" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </section>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section991d18a4140417311d3485810254d863($context, $indent, $value);

        return $buffer;
    }

    private function section9a10d16d887315f744d9f41d724bd85f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                               id="{{{id}}}"
                                               data-userid="{{{data-userid}}}"
                                               data-is-contact="{{{data-is-contact}}}"
                                               data-currentuserid="{{{data-currentuserid}}}"
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                               id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                               data-userid="';
                $value = $this->resolveValue($context->find('data-userid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                               data-is-contact="';
                $value = $this->resolveValue($context->find('data-is-contact'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                               data-currentuserid="';
                $value = $this->resolveValue($context->find('data-currentuserid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9eff38bef66f8027f56251c74f3127f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a role="button" href="{{{url}}}" class="{{{class}}}"
                                            {{#linkattributes}}
                                               id="{{{id}}}"
                                               data-userid="{{{data-userid}}}"
                                               data-is-contact="{{{data-is-contact}}}"
                                               data-currentuserid="{{{data-currentuserid}}}"
                                            {{/linkattributes}}
                                        >
                                            <i class="{{{icon}}}" title="{{{title}}}" aria-label="{{{title}}}"></i>
                                            {{{title}}}
                                        </a>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a role="button" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $value = $context->find('linkattributes');
                $buffer .= $this->section9a10d16d887315f744d9f41d724bd85f($context, $indent, $value);
                $buffer .= $indent . '                                        >
';
                $buffer .= $indent . '                                            <i class="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section851d0d3000ac05d943f38125cd524f0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editmyprofile';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editmyprofile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc79f2c10db27d3aa9913fe4c11abe1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{editprofileurl}}}"><i class="fa fa-edit"></i> {{#str}}editmyprofile{{/str}}</a>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('editprofileurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-edit"></i> ';
                $value = $context->find('str');
                $buffer .= $this->section851d0d3000ac05d943f38125cd524f0d($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb1423a6e6a10993544f977030c62a97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aboutme, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aboutme, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d5170b4c85dff40d37dc90942285f7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <hr>

                                        <h6>{{#str}}aboutme, theme_moove{{/str}}</h6>

                                        <div class="userdescription">{{{userdescription}}}</div>

                                        <hr>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <hr>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                        <h6>';
                $value = $context->find('str');
                $buffer .= $this->sectionDb1423a6e6a10993544f977030c62a97($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                        <div class="userdescription">';
                $value = $this->resolveValue($context->find('userdescription'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                        <hr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc5e6bf2f52087bb9fdc83804816d6d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'personalinformation, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'personalinformation, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b01e301d72d5046cc7d35b0c7a88526(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'email';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'email';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a63d4614ed7207eced0433d17424a33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li>
                                                    <dl>
                                                        <dt>{{#str}}email{{/str}}:</dt>
                                                        <dd>
                                                            <a href="mailto:{{{useremail}}}">{{{useremail}}}</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <li>
';
                $buffer .= $indent . '                                                    <dl>
';
                $buffer .= $indent . '                                                        <dt>';
                $value = $context->find('str');
                $buffer .= $this->section9b01e301d72d5046cc7d35b0c7a88526($context, $indent, $value);
                $buffer .= ':</dt>
';
                $buffer .= $indent . '                                                        <dd>
';
                $buffer .= $indent . '                                                            <a href="mailto:';
                $value = $this->resolveValue($context->find('useremail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('useremail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                                        </dd>
';
                $buffer .= $indent . '                                                    </dl>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc7e0d1c9eced7fe6a89954486196e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'country';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'country';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24ce376c838c4cf94d72387f05b9b9d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li>
                                                    <dl>
                                                        <dt>{{#str}}country{{/str}}:</dt>
                                                        <dd>{{{usercountry}}}</dd>
                                                    </dl>
                                                </li>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <li>
';
                $buffer .= $indent . '                                                    <dl>
';
                $buffer .= $indent . '                                                        <dt>';
                $value = $context->find('str');
                $buffer .= $this->sectionFc7e0d1c9eced7fe6a89954486196e1d($context, $indent, $value);
                $buffer .= ':</dt>
';
                $buffer .= $indent . '                                                        <dd>';
                $value = $this->resolveValue($context->find('usercountry'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</dd>
';
                $buffer .= $indent . '                                                    </dl>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3679242c81b161997dd1ed6d57ce3b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'city';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'city';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe301765ce98e7edec0fb0c14fcd6296(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <li>
                                                    <dl>
                                                        <dt>{{#str}}city{{/str}}:</dt>
                                                        <dd>{{{usercity}}}</dd>
                                                    </dl>
                                                </li>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <li>
';
                $buffer .= $indent . '                                                    <dl>
';
                $buffer .= $indent . '                                                        <dt>';
                $value = $context->find('str');
                $buffer .= $this->sectionD3679242c81b161997dd1ed6d57ce3b1($context, $indent, $value);
                $buffer .= ':</dt>
';
                $buffer .= $indent . '                                                        <dd>';
                $value = $this->resolveValue($context->find('usercity'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</dd>
';
                $buffer .= $indent . '                                                    </dl>
';
                $buffer .= $indent . '                                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section315b838f6a35f5fea595f8942f212b85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <h6>{{#str}}personalinformation, theme_moove{{/str}}</h6>
                                        <ul>
                                            {{#useremail}}
                                                <li>
                                                    <dl>
                                                        <dt>{{#str}}email{{/str}}:</dt>
                                                        <dd>
                                                            <a href="mailto:{{{useremail}}}">{{{useremail}}}</a>
                                                        </dd>
                                                    </dl>
                                                </li>
                                            {{/useremail}}
                                            {{#usercountry}}
                                                <li>
                                                    <dl>
                                                        <dt>{{#str}}country{{/str}}:</dt>
                                                        <dd>{{{usercountry}}}</dd>
                                                    </dl>
                                                </li>
                                            {{/usercountry}}
                                            {{#usercity}}
                                                <li>
                                                    <dl>
                                                        <dt>{{#str}}city{{/str}}:</dt>
                                                        <dd>{{{usercity}}}</dd>
                                                    </dl>
                                                </li>
                                            {{/usercity}}
                                        </ul>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <h6>';
                $value = $context->find('str');
                $buffer .= $this->sectionCc5e6bf2f52087bb9fdc83804816d6d4($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                                        <ul>
';
                $value = $context->find('useremail');
                $buffer .= $this->section4a63d4614ed7207eced0433d17424a33($context, $indent, $value);
                $value = $context->find('usercountry');
                $buffer .= $this->section24ce376c838c4cf94d72387f05b9b9d9($context, $indent, $value);
                $value = $context->find('usercity');
                $buffer .= $this->sectionCe301765ce98e7edec0fb0c14fcd6296($context, $indent, $value);
                $buffer .= $indent . '                                        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section991d18a4140417311d3485810254d863(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    M.util.js_pending(\'theme_boost/loader\');
    require([\'theme_boost/loader\'], function(Loader) {
        M.util.js_complete(\'theme_boost/loader\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '    require([\'theme_boost/loader\'], function(Loader) {
';
                $buffer .= $indent . '        M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
