<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a626f612df3afc5599e46e372a090e75dbc12bcdbb56367dfcecafdae6fcdacc extends Twig_Template
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
        $__internal_71566c4da84b3992dc662a640f3010d4434db885d542c2d1e743070415edefe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71566c4da84b3992dc662a640f3010d4434db885d542c2d1e743070415edefe4->enter($__internal_71566c4da84b3992dc662a640f3010d4434db885d542c2d1e743070415edefe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_26dbfce50d89fd6eb2007c980d1b72030a2c0ee5259cd6796c2a72c9dd943848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26dbfce50d89fd6eb2007c980d1b72030a2c0ee5259cd6796c2a72c9dd943848->enter($__internal_26dbfce50d89fd6eb2007c980d1b72030a2c0ee5259cd6796c2a72c9dd943848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_71566c4da84b3992dc662a640f3010d4434db885d542c2d1e743070415edefe4->leave($__internal_71566c4da84b3992dc662a640f3010d4434db885d542c2d1e743070415edefe4_prof);

        
        $__internal_26dbfce50d89fd6eb2007c980d1b72030a2c0ee5259cd6796c2a72c9dd943848->leave($__internal_26dbfce50d89fd6eb2007c980d1b72030a2c0ee5259cd6796c2a72c9dd943848_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
