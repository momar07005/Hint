<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_c20c225d223302d5a59fdae93e75c0afa5fc5b90d38640cda33fe6095cf35757 extends Twig_Template
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
        $__internal_1abbbe393e9cbe7790db9b56abde36b562202fc2448fea54837a672ade87ea43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abbbe393e9cbe7790db9b56abde36b562202fc2448fea54837a672ade87ea43->enter($__internal_1abbbe393e9cbe7790db9b56abde36b562202fc2448fea54837a672ade87ea43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_af034b16e343652e2d6e3231f571b9e7ff9ba626e7a2824c546b5c308a47f754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af034b16e343652e2d6e3231f571b9e7ff9ba626e7a2824c546b5c308a47f754->enter($__internal_af034b16e343652e2d6e3231f571b9e7ff9ba626e7a2824c546b5c308a47f754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1abbbe393e9cbe7790db9b56abde36b562202fc2448fea54837a672ade87ea43->leave($__internal_1abbbe393e9cbe7790db9b56abde36b562202fc2448fea54837a672ade87ea43_prof);

        
        $__internal_af034b16e343652e2d6e3231f571b9e7ff9ba626e7a2824c546b5c308a47f754->leave($__internal_af034b16e343652e2d6e3231f571b9e7ff9ba626e7a2824c546b5c308a47f754_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
