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
        $__internal_2a83c5f9f831637d4001ed9b381c4b61d01452df4ac34d9e5c58dc1c3cc0afeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a83c5f9f831637d4001ed9b381c4b61d01452df4ac34d9e5c58dc1c3cc0afeb->enter($__internal_2a83c5f9f831637d4001ed9b381c4b61d01452df4ac34d9e5c58dc1c3cc0afeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d0072c0a1ce440f7af34474c3ce3d8575c6d7b60726fcb0b2356d590caee7040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0072c0a1ce440f7af34474c3ce3d8575c6d7b60726fcb0b2356d590caee7040->enter($__internal_d0072c0a1ce440f7af34474c3ce3d8575c6d7b60726fcb0b2356d590caee7040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2a83c5f9f831637d4001ed9b381c4b61d01452df4ac34d9e5c58dc1c3cc0afeb->leave($__internal_2a83c5f9f831637d4001ed9b381c4b61d01452df4ac34d9e5c58dc1c3cc0afeb_prof);

        
        $__internal_d0072c0a1ce440f7af34474c3ce3d8575c6d7b60726fcb0b2356d590caee7040->leave($__internal_d0072c0a1ce440f7af34474c3ce3d8575c6d7b60726fcb0b2356d590caee7040_prof);

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
