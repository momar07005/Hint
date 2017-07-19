<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_cae6b3cea0fece49c96461d6ecde8522e12a7df157a879a4ce97607fc348194f extends Twig_Template
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
        $__internal_693fcfbdca571afd19ce67f375690288fc94d78df8257aeaee95e23888b3fc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693fcfbdca571afd19ce67f375690288fc94d78df8257aeaee95e23888b3fc1c->enter($__internal_693fcfbdca571afd19ce67f375690288fc94d78df8257aeaee95e23888b3fc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f93342ea9b36ac45a2eb97d709a64d3317e03489a681741e05856aba90f06dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93342ea9b36ac45a2eb97d709a64d3317e03489a681741e05856aba90f06dd4->enter($__internal_f93342ea9b36ac45a2eb97d709a64d3317e03489a681741e05856aba90f06dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_693fcfbdca571afd19ce67f375690288fc94d78df8257aeaee95e23888b3fc1c->leave($__internal_693fcfbdca571afd19ce67f375690288fc94d78df8257aeaee95e23888b3fc1c_prof);

        
        $__internal_f93342ea9b36ac45a2eb97d709a64d3317e03489a681741e05856aba90f06dd4->leave($__internal_f93342ea9b36ac45a2eb97d709a64d3317e03489a681741e05856aba90f06dd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
