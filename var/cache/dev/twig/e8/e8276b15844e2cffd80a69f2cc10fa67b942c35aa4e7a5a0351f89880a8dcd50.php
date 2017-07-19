<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_da1e8ef377c1f6eb2fafdb4ed5e75569401d9a366ed3f6f44d233ebcfbd71b87 extends Twig_Template
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
        $__internal_ae530f67f20a013425beffe2d1b7845adc49d26721c11f7a12c48e07d3d4e270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae530f67f20a013425beffe2d1b7845adc49d26721c11f7a12c48e07d3d4e270->enter($__internal_ae530f67f20a013425beffe2d1b7845adc49d26721c11f7a12c48e07d3d4e270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_af7ce26f8d49f2bf325519c106a5abe46feb9f399134389acb0bc0e51dbefae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7ce26f8d49f2bf325519c106a5abe46feb9f399134389acb0bc0e51dbefae3->enter($__internal_af7ce26f8d49f2bf325519c106a5abe46feb9f399134389acb0bc0e51dbefae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ae530f67f20a013425beffe2d1b7845adc49d26721c11f7a12c48e07d3d4e270->leave($__internal_ae530f67f20a013425beffe2d1b7845adc49d26721c11f7a12c48e07d3d4e270_prof);

        
        $__internal_af7ce26f8d49f2bf325519c106a5abe46feb9f399134389acb0bc0e51dbefae3->leave($__internal_af7ce26f8d49f2bf325519c106a5abe46feb9f399134389acb0bc0e51dbefae3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
