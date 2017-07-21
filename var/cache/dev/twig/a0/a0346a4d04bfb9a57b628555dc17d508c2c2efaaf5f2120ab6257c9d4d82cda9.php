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
        $__internal_063226282924aa1d2ced41ff52e2d970c9c46b3223e00d6b6b84fcbaa8b70dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063226282924aa1d2ced41ff52e2d970c9c46b3223e00d6b6b84fcbaa8b70dc7->enter($__internal_063226282924aa1d2ced41ff52e2d970c9c46b3223e00d6b6b84fcbaa8b70dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_31a386307351694ff60561b557280cca9b156aff2dbe5d8f61c36b69871fa2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a386307351694ff60561b557280cca9b156aff2dbe5d8f61c36b69871fa2f7->enter($__internal_31a386307351694ff60561b557280cca9b156aff2dbe5d8f61c36b69871fa2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_063226282924aa1d2ced41ff52e2d970c9c46b3223e00d6b6b84fcbaa8b70dc7->leave($__internal_063226282924aa1d2ced41ff52e2d970c9c46b3223e00d6b6b84fcbaa8b70dc7_prof);

        
        $__internal_31a386307351694ff60561b557280cca9b156aff2dbe5d8f61c36b69871fa2f7->leave($__internal_31a386307351694ff60561b557280cca9b156aff2dbe5d8f61c36b69871fa2f7_prof);

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
