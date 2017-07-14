<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_91fa89a7c9d7b47aed4e927f36bae3d0d60ca6d398eae5ed96ae75e220b143a5 extends Twig_Template
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
        $__internal_ac33e644a18c8bd596fae67bd49ba45a99b127fd945528b12a18598d73631ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac33e644a18c8bd596fae67bd49ba45a99b127fd945528b12a18598d73631ac0->enter($__internal_ac33e644a18c8bd596fae67bd49ba45a99b127fd945528b12a18598d73631ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_48646fff64c85e1cecd5d3ccd6a00219728ffba2ab9fdbc09432595ab74195e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48646fff64c85e1cecd5d3ccd6a00219728ffba2ab9fdbc09432595ab74195e0->enter($__internal_48646fff64c85e1cecd5d3ccd6a00219728ffba2ab9fdbc09432595ab74195e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ac33e644a18c8bd596fae67bd49ba45a99b127fd945528b12a18598d73631ac0->leave($__internal_ac33e644a18c8bd596fae67bd49ba45a99b127fd945528b12a18598d73631ac0_prof);

        
        $__internal_48646fff64c85e1cecd5d3ccd6a00219728ffba2ab9fdbc09432595ab74195e0->leave($__internal_48646fff64c85e1cecd5d3ccd6a00219728ffba2ab9fdbc09432595ab74195e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
