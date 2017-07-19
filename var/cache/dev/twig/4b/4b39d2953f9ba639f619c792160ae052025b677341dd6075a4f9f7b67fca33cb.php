<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_096e93296d33f4f5464d91f7f7376a5f4b14a81c16dec3c607726b330d2e5a00 extends Twig_Template
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
        $__internal_f39f71cd0ac9ec472b7635c272b94d43c4118693ca2d90cd39f899e9bb9feaa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39f71cd0ac9ec472b7635c272b94d43c4118693ca2d90cd39f899e9bb9feaa6->enter($__internal_f39f71cd0ac9ec472b7635c272b94d43c4118693ca2d90cd39f899e9bb9feaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d53ca075f2f887f7abd23463e8369b9aa67d299ec60544e5550f1e82860e6cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53ca075f2f887f7abd23463e8369b9aa67d299ec60544e5550f1e82860e6cf1->enter($__internal_d53ca075f2f887f7abd23463e8369b9aa67d299ec60544e5550f1e82860e6cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f39f71cd0ac9ec472b7635c272b94d43c4118693ca2d90cd39f899e9bb9feaa6->leave($__internal_f39f71cd0ac9ec472b7635c272b94d43c4118693ca2d90cd39f899e9bb9feaa6_prof);

        
        $__internal_d53ca075f2f887f7abd23463e8369b9aa67d299ec60544e5550f1e82860e6cf1->leave($__internal_d53ca075f2f887f7abd23463e8369b9aa67d299ec60544e5550f1e82860e6cf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
