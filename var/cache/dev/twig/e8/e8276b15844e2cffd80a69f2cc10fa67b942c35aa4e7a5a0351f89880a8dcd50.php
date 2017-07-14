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
        $__internal_917537f6e87b2fa931c0239d8bc26972748fd2f68a241cd0393997373573a237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917537f6e87b2fa931c0239d8bc26972748fd2f68a241cd0393997373573a237->enter($__internal_917537f6e87b2fa931c0239d8bc26972748fd2f68a241cd0393997373573a237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5309d0fb6b3b753017b73eaf6172088d97a57444d10ddc751683fb1c89c87307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5309d0fb6b3b753017b73eaf6172088d97a57444d10ddc751683fb1c89c87307->enter($__internal_5309d0fb6b3b753017b73eaf6172088d97a57444d10ddc751683fb1c89c87307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_917537f6e87b2fa931c0239d8bc26972748fd2f68a241cd0393997373573a237->leave($__internal_917537f6e87b2fa931c0239d8bc26972748fd2f68a241cd0393997373573a237_prof);

        
        $__internal_5309d0fb6b3b753017b73eaf6172088d97a57444d10ddc751683fb1c89c87307->leave($__internal_5309d0fb6b3b753017b73eaf6172088d97a57444d10ddc751683fb1c89c87307_prof);

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
