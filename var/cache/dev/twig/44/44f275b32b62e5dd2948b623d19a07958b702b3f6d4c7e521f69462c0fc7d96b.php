<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_9ba3267489c239cf88e565a89449748101f78f0437ac0e0da96cab2eacf1894f extends Twig_Template
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
        $__internal_66f4a1ee4257ab10be54bba0c23d9a094c7c79505ed580edc84f715361cf7bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f4a1ee4257ab10be54bba0c23d9a094c7c79505ed580edc84f715361cf7bd3->enter($__internal_66f4a1ee4257ab10be54bba0c23d9a094c7c79505ed580edc84f715361cf7bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6ca666c7b849380aec460592e898e105c9b456b186ec000cfd1bb496e8187878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca666c7b849380aec460592e898e105c9b456b186ec000cfd1bb496e8187878->enter($__internal_6ca666c7b849380aec460592e898e105c9b456b186ec000cfd1bb496e8187878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_66f4a1ee4257ab10be54bba0c23d9a094c7c79505ed580edc84f715361cf7bd3->leave($__internal_66f4a1ee4257ab10be54bba0c23d9a094c7c79505ed580edc84f715361cf7bd3_prof);

        
        $__internal_6ca666c7b849380aec460592e898e105c9b456b186ec000cfd1bb496e8187878->leave($__internal_6ca666c7b849380aec460592e898e105c9b456b186ec000cfd1bb496e8187878_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
