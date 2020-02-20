<?php
/**
 * DokuWiki Plugin actionrenderer (Renderer Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Andreas Gohr <andi@splitbrain.org>
 */


class renderer_plugin_actionrenderer extends Doku_Renderer_xhtml
{

    /**
     * Make available as XHTML replacement renderer
     * @param string $format requested format
     * @return bool
     */
    public function canRender($format)
    {
        if ($format == 'xhtml') {
            return true;
        }
        return false;
    }

    /**
     * Wrap the method in an event and call it on the parent
     *
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    protected function trigger($method, $arguments)
    {
        $data = [
            'method' => $method,
            'renderer' => $this,
            'arguments' => &$arguments
        ];

        $event = new Doku_Event('PLUGIN_ACTIONRENDERER_METHOD_EXECUTE', $data);
        if ($event->advise_before()) {
            $event->result = call_user_func_array([$this, 'parent::' . $method], $arguments);
        }
        $event->advise_after();
        return $event->result;
    }


    /** @inheritDoc */
    public function document_start()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function document_end()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function toc_additem($id, $text, $level)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function header($text, $level, $pos)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function section_open($level)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function section_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function cdata($text)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function p_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function p_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function linebreak()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function hr()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function strong_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function strong_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function emphasis_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function emphasis_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function underline_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function underline_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function monospace_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function monospace_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function subscript_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function subscript_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function superscript_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function superscript_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function deleted_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function deleted_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function footnote_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function footnote_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function listu_open($classes = null)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function listu_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function listo_open($classes = null)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function listo_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function listitem_open($level, $node = false)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function listitem_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function listcontent_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function listcontent_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function unformatted($text)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function php($text, $wrapper = 'code')
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function phpblock($text)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function html($text, $wrapper = 'code')
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function htmlblock($text)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function quote_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function quote_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function preformatted($text)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function file($text, $language = null, $filename = null, $options = null)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function code($text, $language = null, $filename = null, $options = null)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function acronym($acronym)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function smiley($smiley)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function entity($entity)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function multiplyentity($x, $y)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function singlequoteopening()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function singlequoteclosing()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function apostrophe()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function doublequoteopening()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function doublequoteclosing()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function camelcaselink($link, $returnonly = false)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function locallink($hash, $name = null, $returnonly = false)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function internallink($id, $name = null, $search = null, $returnonly = false, $linktype = 'content')
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function externallink($url, $name = null, $returnonly = false)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function interwikilink($match, $name, $wikiName, $wikiUri, $returnonly = false)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function windowssharelink($url, $name = null, $returnonly = false)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function emaillink($address, $name = null, $returnonly = false)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function internalmedia($src, $title = null, $align = null, $width = null, $height = null, $cache = null, $linking = null, $return = false)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function externalmedia($src, $title = null, $align = null, $width = null, $height = null, $cache = null, $linking = null, $return = false)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function rss($url, $params)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function table_open($maxcols = null, $numrows = null, $pos = null, $classes = null)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function table_close($pos = null)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tablethead_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tablethead_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tabletbody_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tabletbody_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tabletfoot_open()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tabletfoot_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tablerow_open($classes = null)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tablerow_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tableheader_open($colspan = 1, $align = null, $rowspan = 1, $classes = null)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tableheader_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tablecell_open($colspan = 1, $align = null, $rowspan = 1, $classes = null)
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function tablecell_close()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }

    /** @inheritDoc */
    public function getLastlevel()
    {
        return $this->trigger(__FUNCTION__, func_get_args());
    }


}

