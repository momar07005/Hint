<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_846847d59d535ab819e48078664df382e03400bb78737d2b3772e17e2c859283 extends Twig_Template
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
        $__internal_d2f45c075bc60353b27ecb978a84ffcb0e6a1cf0f721763b6cd9e444dd004ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f45c075bc60353b27ecb978a84ffcb0e6a1cf0f721763b6cd9e444dd004ae0->enter($__internal_d2f45c075bc60353b27ecb978a84ffcb0e6a1cf0f721763b6cd9e444dd004ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f3c87e22b9fcdc4574c925a34c0a591e70bc3e80f28a523a04a0917d58d20394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c87e22b9fcdc4574c925a34c0a591e70bc3e80f28a523a04a0917d58d20394->enter($__internal_f3c87e22b9fcdc4574c925a34c0a591e70bc3e80f28a523a04a0917d58d20394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d2f45c075bc60353b27ecb978a84ffcb0e6a1cf0f721763b6cd9e444dd004ae0->leave($__internal_d2f45c075bc60353b27ecb978a84ffcb0e6a1cf0f721763b6cd9e444dd004ae0_prof);

        
        $__internal_f3c87e22b9fcdc4574c925a34c0a591e70bc3e80f28a523a04a0917d58d20394->leave($__internal_f3c87e22b9fcdc4574c925a34c0a591e70bc3e80f28a523a04a0917d58d20394_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
