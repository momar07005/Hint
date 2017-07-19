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
        $__internal_50d5ba8bf07dfe57c460d08627cd2fa24a829f6e5d305acc3b7295c396c7d0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d5ba8bf07dfe57c460d08627cd2fa24a829f6e5d305acc3b7295c396c7d0f1->enter($__internal_50d5ba8bf07dfe57c460d08627cd2fa24a829f6e5d305acc3b7295c396c7d0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0b488d435f2d84942d7ff75c6b671f11b93a8f7b8fc913db8379383dcd9c9fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b488d435f2d84942d7ff75c6b671f11b93a8f7b8fc913db8379383dcd9c9fa5->enter($__internal_0b488d435f2d84942d7ff75c6b671f11b93a8f7b8fc913db8379383dcd9c9fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_50d5ba8bf07dfe57c460d08627cd2fa24a829f6e5d305acc3b7295c396c7d0f1->leave($__internal_50d5ba8bf07dfe57c460d08627cd2fa24a829f6e5d305acc3b7295c396c7d0f1_prof);

        
        $__internal_0b488d435f2d84942d7ff75c6b671f11b93a8f7b8fc913db8379383dcd9c9fa5->leave($__internal_0b488d435f2d84942d7ff75c6b671f11b93a8f7b8fc913db8379383dcd9c9fa5_prof);

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
