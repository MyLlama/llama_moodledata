<?php

class __Mustache_6433ccbaebad544a6db150ebb0c2f6f3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form id="responseform" method="post" action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" enctype="multipart/form-data" autocomplete="off">
';
        $buffer .= $indent . '    <div class="d-flex">
';
        $buffer .= $indent . '        <h2 class="mt-2">';
        $value = $this->resolveValue($context->find('questionicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '        <h2 class="ml-2 mt-2"> ';
        $value = $this->resolveValue($context->find('questiontitle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h2>
';
        $buffer .= $indent . '        <h3 class="px-2 py-1 ml-2 mt-2">
';
        $buffer .= $indent . '            <span class="badge bg-primary text-light">';
        $value = $this->resolveValue($context->find('versiontitle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '        </h3>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-flex">
';
        $buffer .= $indent . '        <div class="badge-primary h-50 px-2 mt-n2">
';
        $buffer .= $indent . '            <span class="accesshide">ID number</span>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('questionidumber'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <br>
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('session'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="hidden" name="slots" value="';
        $value = $this->resolveValue($context->find('slot'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="hidden" name="scrollpos" value="" id="scrollpos">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('question'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div id="previewcontrols" class="controls input-group">
';
        $buffer .= $indent . '        <input type="submit" name="restart" value="';
        $value = $context->find('str');
        $buffer .= $this->section8641f130d18b69a6ea7dcb9677655f15($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary mr-1 mb-1" id="id_restart_question_preview" ';
        $value = $this->resolveValue($context->find('restartdisabled'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '        <input type="submit" name="save" value="';
        $value = $context->find('str');
        $buffer .= $this->section57c048e192657f426e86cefa8fcd08c9($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary mr-1 mb-1" id="id_save_question_preview" ';
        $value = $this->resolveValue($context->find('finishdisabled'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '        <input type="submit" name="fill" value="';
        $value = $context->find('str');
        $buffer .= $this->sectionF03f74e9fff013753c944827c0cb6ac5($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary mr-1 mb-1" ';
        $value = $this->resolveValue($context->find('filldisabled'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '        <input type="submit" name="finish" value="';
        $value = $context->find('str');
        $buffer .= $this->section7f65f19f1b1ba96fc0ed86f3ea9ce2e7($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary mr-1 mb-1" id="id_finish_question_preview" ';
        $value = $this->resolveValue($context->find('finishdisabled'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $value = $context->find('redirect');
        if (empty($value)) {
            
            $buffer .= $indent . '            <input type="button" name="close" value="';
            $value = $context->find('str');
            $buffer .= $this->section93ff76985c4533d7046185baf8a48aa3($context, $indent, $value);
            $buffer .= '" class="btn btn-secondary mr-1 mb-1" id="close-previewquestion-page">
';
        }
        $value = $context->find('redirect');
        $buffer .= $this->sectionFf2d34e4eed4801ec8536374aee6989c($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '<br>
';
        $value = $context->find('comments');
        $buffer .= $this->sectionBaab6ea45a1ac8f7e82004c29984778e($context, $indent, $value);
        $value = $context->find('comments');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $this->resolveValue($context->find('options'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $value = $this->resolveValue($context->find('techinfo'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('extrapreviewelements');
        $buffer .= $this->section9e7b567766417dcb65c40111ae087eb1($context, $indent, $value);

        return $buffer;
    }

    private function section8641f130d18b69a6ea7dcb9677655f15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' restart, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' restart, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57c048e192657f426e86cefa8fcd08c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' save, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' save, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF03f74e9fff013753c944827c0cb6ac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' fillincorrect, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' fillincorrect, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f65f19f1b1ba96fc0ed86f3ea9ce2e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' submitandfinish, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' submitandfinish, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93ff76985c4533d7046185baf8a48aa3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' closepreview, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' closepreview, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf2d34e4eed4801ec8536374aee6989c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{redirecturl}}}" class="btn btn-secondary mr-1 mb-1" role="button">{{#str}} closepreview, question{{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('redirecturl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-secondary mr-1 mb-1" role="button">';
                $value = $context->find('str');
                $buffer .= $this->section93ff76985c4533d7046185baf8a48aa3($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb21be3147b00254c7256c9c85519aaf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsed, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsed, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe652619da48f0977a9abbfbaf6035f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' commentplural, qbank_comment';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' commentplural, qbank_comment';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBaab6ea45a1ac8f7e82004c29984778e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a data-toggle="collapse" href="#commentcollapse" role="button" aria-expanded="false" aria-controls="commentcollapse">
        {{#pix}} t/collapsed, core {{/pix}}
        {{#str}} commentplural, qbank_comment{{/str}}
    </a>
    <div class="collapse" id="commentcollapse">
        {{{comments}}}
    </div>
    {{{options}}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a data-toggle="collapse" href="#commentcollapse" role="button" aria-expanded="false" aria-controls="commentcollapse">
';
                $buffer .= $indent . '        ';
                $value = $context->find('pix');
                $buffer .= $this->sectionFb21be3147b00254c7256c9c85519aaf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->sectionAe652619da48f0977a9abbfbaf6035f3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <div class="collapse" id="commentcollapse">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('comments'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('options'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e7b567766417dcb65c40111ae087eb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{extrapreviewelements}}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('extrapreviewelements'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
