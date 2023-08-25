<?php

class __Mustache_67cfe80d791ce6abbbf8dd19c42fe994 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $this->resolveValue($context->find('coursename'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= ' -> ';
        $value = $context->find('str');
        $buffer .= $this->section18736ac7a7e3e335e3a7c814340188f4($context, $indent, $value);
        $buffer .= ' -> ';
        $value = $this->resolveValue($context->find('forumname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $value = $context->find('showdiscussionname');
        $buffer .= $this->section3514c400b60a81611b3557f1f9b759bc($context, $indent, $value);
        $buffer .= '
';
        $value = $this->resolveValue($context->find('permalink'), $context);
        $buffer .= $indent . ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('str');
        $buffer .= $this->section1db6c95ffa3d0c5559a7f72a44248041($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('isprivatereply');
        $buffer .= $this->section4741d805a56d9b175213cfed7eca3300($context, $indent, $value);
        $buffer .= $indent . '---------------------------------------------------------------------
';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('attachments'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '---------------------------------------------------------------------
';
        $value = $context->find('str');
        $buffer .= $this->section3076257f1bbeb61d7a395db938105c3b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('canreply');
        $buffer .= $this->sectionDf6cf8f4d975065dc4c58d440605ce91($context, $indent, $value);
        $value = $context->find('unsubscribeforumlink');
        $buffer .= $this->sectionC54999dc8180d71daf0fb8cbe8eb77d8($context, $indent, $value);
        $value = $context->find('unsubscribediscussionlink');
        $buffer .= $this->sectionF5215fe9a08773b7baed34c3d830194c($context, $indent, $value);
        $value = $context->find('str');
        $buffer .= $this->sectionE91f0781e7dab670c281be50080c244e($context, $indent, $value);
        $buffer .= '
';

        return $buffer;
    }

    private function section18736ac7a7e3e335e3a7c814340188f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' forums, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' forums, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3514c400b60a81611b3557f1f9b759bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' -> {{{ discussionname }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' -> ';
                $value = $this->resolveValue($context->find('discussionname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section111d6069f1960ebf0926cd420737b241(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{ authorfullname }}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('authorfullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE63a53b1895395e45a30eff532a83baf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ postdate }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('postdate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1db6c95ffa3d0c5559a7f72a44248041(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bynameondate, forum, {
        "name": {{# quote }}{{{ authorfullname }}}{{/ quote }},
        "date": {{# quote}}{{ postdate }}{{/ quote }}
    } ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' bynameondate, forum, {
';
                $buffer .= $indent . '        "name": ';
                $value = $context->find('quote');
                $buffer .= $this->section111d6069f1960ebf0926cd420737b241($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '        "date": ';
                $value = $context->find('quote');
                $buffer .= $this->sectionE63a53b1895395e45a30eff532a83baf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8e8c40f40ebf9b17e52b5d63f27ff2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postisprivatereply, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' postisprivatereply, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4741d805a56d9b175213cfed7eca3300(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{# str }} postisprivatereply, forum {{/ str }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionC8e8c40f40ebf9b17e52b5d63f27ff2c($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3076257f1bbeb61d7a395db938105c3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postmailinfo, forum, {{{ coursename }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' postmailinfo, forum, ';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a53998280d94c3ce90b9f4840ca2b03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postmailreply, forum, {{{ replylink }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' postmailreply, forum, ';
                $value = $this->resolveValue($context->find('replylink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf6cf8f4d975065dc4c58d440605ce91(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^ isprivatereply }}
        {{# str }} postmailreply, forum, {{{ replylink }}} {{/ str }}
    {{/ isprivatereply }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isprivatereply');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        ';
                    $value = $context->find('str');
                    $buffer .= $this->section1a53998280d94c3ce90b9f4840ca2b03($context, $indent, $value);
                    $buffer .= '
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a99209d461a5aa37d3659254c8a4033(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unsubscribelink, forum, {{{ unsubscribeforumlink }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' unsubscribelink, forum, ';
                $value = $this->resolveValue($context->find('unsubscribeforumlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC54999dc8180d71daf0fb8cbe8eb77d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{# str }} unsubscribelink, forum, {{{ unsubscribeforumlink }}} {{/ str }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section8a99209d461a5aa37d3659254c8a4033($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6896c6fbc21a61fc7a2507b64726bc92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unsubscribediscussionlink, forum, {{{ unsubscribediscussionlink }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' unsubscribediscussionlink, forum, ';
                $value = $this->resolveValue($context->find('unsubscribediscussionlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5215fe9a08773b7baed34c3d830194c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{# str }} unsubscribediscussionlink, forum, {{{ unsubscribediscussionlink }}} {{/ str }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section6896c6fbc21a61fc7a2507b64726bc92($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE91f0781e7dab670c281be50080c244e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' digestmailpostlink, forum, {{{ forumindexlink }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' digestmailpostlink, forum, ';
                $value = $this->resolveValue($context->find('forumindexlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
