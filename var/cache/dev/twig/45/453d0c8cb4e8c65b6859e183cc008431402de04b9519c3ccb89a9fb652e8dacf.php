<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2391c7bb2f7bbf2067a13a7b7a69158a9b72bb8fdcd8e15f19a5619e761c428c extends Twig_Template
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
        $__internal_2b2eee739b79e410a961f16bbc2c53a3627f37fb0f3d01c1a623fbd0612ecb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2eee739b79e410a961f16bbc2c53a3627f37fb0f3d01c1a623fbd0612ecb77->enter($__internal_2b2eee739b79e410a961f16bbc2c53a3627f37fb0f3d01c1a623fbd0612ecb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3f63de589c394bf190d4d1bbb9c2a5433096af819786ffce73a22dc11c576949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f63de589c394bf190d4d1bbb9c2a5433096af819786ffce73a22dc11c576949->enter($__internal_3f63de589c394bf190d4d1bbb9c2a5433096af819786ffce73a22dc11c576949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2b2eee739b79e410a961f16bbc2c53a3627f37fb0f3d01c1a623fbd0612ecb77->leave($__internal_2b2eee739b79e410a961f16bbc2c53a3627f37fb0f3d01c1a623fbd0612ecb77_prof);

        
        $__internal_3f63de589c394bf190d4d1bbb9c2a5433096af819786ffce73a22dc11c576949->leave($__internal_3f63de589c394bf190d4d1bbb9c2a5433096af819786ffce73a22dc11c576949_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
