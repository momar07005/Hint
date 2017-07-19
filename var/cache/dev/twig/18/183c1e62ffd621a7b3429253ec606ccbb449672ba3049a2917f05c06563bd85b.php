<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0409da11edb95d82fc4aabaa165503621f0ca5e5475a0bc28ce6ae63f6882937 extends Twig_Template
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
        $__internal_f704643fb74fa424385df61bcd7b699bbceee28b5963f2613f468ec08227c022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f704643fb74fa424385df61bcd7b699bbceee28b5963f2613f468ec08227c022->enter($__internal_f704643fb74fa424385df61bcd7b699bbceee28b5963f2613f468ec08227c022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ea35c315feedaeebec099ed138ea92a7b8b8035ee83eae53c4b20792cfb6e67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea35c315feedaeebec099ed138ea92a7b8b8035ee83eae53c4b20792cfb6e67d->enter($__internal_ea35c315feedaeebec099ed138ea92a7b8b8035ee83eae53c4b20792cfb6e67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f704643fb74fa424385df61bcd7b699bbceee28b5963f2613f468ec08227c022->leave($__internal_f704643fb74fa424385df61bcd7b699bbceee28b5963f2613f468ec08227c022_prof);

        
        $__internal_ea35c315feedaeebec099ed138ea92a7b8b8035ee83eae53c4b20792cfb6e67d->leave($__internal_ea35c315feedaeebec099ed138ea92a7b8b8035ee83eae53c4b20792cfb6e67d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
