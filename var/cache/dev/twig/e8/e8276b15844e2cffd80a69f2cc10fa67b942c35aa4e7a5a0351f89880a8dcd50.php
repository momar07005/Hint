<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_da1e8ef377c1f6eb2fafdb4ed5e75569401d9a366ed3f6f44d233ebcfbd71b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2eacfffd0f3984d72030aa7ceb069328a72a17e61bf974e7f33f7668b7b90cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eacfffd0f3984d72030aa7ceb069328a72a17e61bf974e7f33f7668b7b90cd4->enter($__internal_2eacfffd0f3984d72030aa7ceb069328a72a17e61bf974e7f33f7668b7b90cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_560cbd007d192cbd6bd3ec8cf388ec256b96f19c1c4b7e06e14ebfbc38a82265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560cbd007d192cbd6bd3ec8cf388ec256b96f19c1c4b7e06e14ebfbc38a82265->enter($__internal_560cbd007d192cbd6bd3ec8cf388ec256b96f19c1c4b7e06e14ebfbc38a82265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2eacfffd0f3984d72030aa7ceb069328a72a17e61bf974e7f33f7668b7b90cd4->leave($__internal_2eacfffd0f3984d72030aa7ceb069328a72a17e61bf974e7f33f7668b7b90cd4_prof);

        
        $__internal_560cbd007d192cbd6bd3ec8cf388ec256b96f19c1c4b7e06e14ebfbc38a82265->leave($__internal_560cbd007d192cbd6bd3ec8cf388ec256b96f19c1c4b7e06e14ebfbc38a82265_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
