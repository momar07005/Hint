<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_000d820c68735c7cce697d80db7c211472e86865067078be35a5255d53e65bd2 extends Twig_Template
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
        $__internal_762bc4f9a5d8fe25b8396d5992fbcb036c5b073844f69969403195e66ab33333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762bc4f9a5d8fe25b8396d5992fbcb036c5b073844f69969403195e66ab33333->enter($__internal_762bc4f9a5d8fe25b8396d5992fbcb036c5b073844f69969403195e66ab33333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c8f66a5906efdba1c09372b15050faaa05948bf07e8472fb125a72de921b4d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f66a5906efdba1c09372b15050faaa05948bf07e8472fb125a72de921b4d2d->enter($__internal_c8f66a5906efdba1c09372b15050faaa05948bf07e8472fb125a72de921b4d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_762bc4f9a5d8fe25b8396d5992fbcb036c5b073844f69969403195e66ab33333->leave($__internal_762bc4f9a5d8fe25b8396d5992fbcb036c5b073844f69969403195e66ab33333_prof);

        
        $__internal_c8f66a5906efdba1c09372b15050faaa05948bf07e8472fb125a72de921b4d2d->leave($__internal_c8f66a5906efdba1c09372b15050faaa05948bf07e8472fb125a72de921b4d2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
