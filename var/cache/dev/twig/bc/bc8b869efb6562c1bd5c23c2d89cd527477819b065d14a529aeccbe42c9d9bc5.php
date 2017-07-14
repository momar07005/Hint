<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_819d257c8bbbd23b039839d57cb6df68969b76203f68a5c877514f6bddf7a6ad extends Twig_Template
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
        $__internal_80c6ff7fd9768bcd8e9978d5d34d3bbc4a45b1290861eacd69780397177efaa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c6ff7fd9768bcd8e9978d5d34d3bbc4a45b1290861eacd69780397177efaa2->enter($__internal_80c6ff7fd9768bcd8e9978d5d34d3bbc4a45b1290861eacd69780397177efaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a9b6012c36b1649587efe4afc531f6d617dc212c27535459aa37c2897183f03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b6012c36b1649587efe4afc531f6d617dc212c27535459aa37c2897183f03e->enter($__internal_a9b6012c36b1649587efe4afc531f6d617dc212c27535459aa37c2897183f03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_80c6ff7fd9768bcd8e9978d5d34d3bbc4a45b1290861eacd69780397177efaa2->leave($__internal_80c6ff7fd9768bcd8e9978d5d34d3bbc4a45b1290861eacd69780397177efaa2_prof);

        
        $__internal_a9b6012c36b1649587efe4afc531f6d617dc212c27535459aa37c2897183f03e->leave($__internal_a9b6012c36b1649587efe4afc531f6d617dc212c27535459aa37c2897183f03e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
