<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_38f96c15819664d74a4744228d879f46ecbf98faafafebe0d96e495179d9756d extends Twig_Template
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
        $__internal_cce606bcb48eeadd5a97f94c0b88d554c1f19ed8375887981ab14db7f94c32df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce606bcb48eeadd5a97f94c0b88d554c1f19ed8375887981ab14db7f94c32df->enter($__internal_cce606bcb48eeadd5a97f94c0b88d554c1f19ed8375887981ab14db7f94c32df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_157ba541f0e63a58c1010de4d16943edf946cfeef32261044b8d2a01ad0266ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157ba541f0e63a58c1010de4d16943edf946cfeef32261044b8d2a01ad0266ce->enter($__internal_157ba541f0e63a58c1010de4d16943edf946cfeef32261044b8d2a01ad0266ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cce606bcb48eeadd5a97f94c0b88d554c1f19ed8375887981ab14db7f94c32df->leave($__internal_cce606bcb48eeadd5a97f94c0b88d554c1f19ed8375887981ab14db7f94c32df_prof);

        
        $__internal_157ba541f0e63a58c1010de4d16943edf946cfeef32261044b8d2a01ad0266ce->leave($__internal_157ba541f0e63a58c1010de4d16943edf946cfeef32261044b8d2a01ad0266ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
