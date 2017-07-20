<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_613b0d0bf0b04bfa2d6cf8114d39dbb606328d22feb5121c8b8c418608140930 extends Twig_Template
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
        $__internal_099bdc89c6a850707fe60c87770db64e03d57eaa125f3b11d188b28e49f05dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099bdc89c6a850707fe60c87770db64e03d57eaa125f3b11d188b28e49f05dc5->enter($__internal_099bdc89c6a850707fe60c87770db64e03d57eaa125f3b11d188b28e49f05dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c2f2b0648685a29949782ad941f931efd9f912880f735e44123bc56766dbe6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f2b0648685a29949782ad941f931efd9f912880f735e44123bc56766dbe6fa->enter($__internal_c2f2b0648685a29949782ad941f931efd9f912880f735e44123bc56766dbe6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_099bdc89c6a850707fe60c87770db64e03d57eaa125f3b11d188b28e49f05dc5->leave($__internal_099bdc89c6a850707fe60c87770db64e03d57eaa125f3b11d188b28e49f05dc5_prof);

        
        $__internal_c2f2b0648685a29949782ad941f931efd9f912880f735e44123bc56766dbe6fa->leave($__internal_c2f2b0648685a29949782ad941f931efd9f912880f735e44123bc56766dbe6fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
