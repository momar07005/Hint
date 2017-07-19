<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8cdc4b2a5a16ab9f578cd9d272045f359e710851f16641c73a5de7a81596ed32 extends Twig_Template
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
        $__internal_d28e65a39d611c88f554463823a801889cbddd5c5739279e675b5e699619f32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28e65a39d611c88f554463823a801889cbddd5c5739279e675b5e699619f32a->enter($__internal_d28e65a39d611c88f554463823a801889cbddd5c5739279e675b5e699619f32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4c85f310134e8562ad54f9f7a8730d3918dc47a56ee1e45bd55a9f1d8f9f7d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c85f310134e8562ad54f9f7a8730d3918dc47a56ee1e45bd55a9f1d8f9f7d8e->enter($__internal_4c85f310134e8562ad54f9f7a8730d3918dc47a56ee1e45bd55a9f1d8f9f7d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d28e65a39d611c88f554463823a801889cbddd5c5739279e675b5e699619f32a->leave($__internal_d28e65a39d611c88f554463823a801889cbddd5c5739279e675b5e699619f32a_prof);

        
        $__internal_4c85f310134e8562ad54f9f7a8730d3918dc47a56ee1e45bd55a9f1d8f9f7d8e->leave($__internal_4c85f310134e8562ad54f9f7a8730d3918dc47a56ee1e45bd55a9f1d8f9f7d8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
