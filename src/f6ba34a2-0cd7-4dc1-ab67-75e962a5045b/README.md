```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Xml (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**
> extends: ****
```uml
@startuml
class Xml << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # CMSApplication $app
  + __construct(?Config $config = null, ?CMSApplication $app = null)
  + get(array $attributes, ?array $options = null) : ?\SimpleXMLElement
  + append(\SimpleXMLElement $xml, mixed $node) : void
  + comment(\SimpleXMLElement $xml, string $comment) : void
  + attributes(\SimpleXMLElement $xml, array $attributes = []) : void
  + options(\SimpleXMLElement $xml, array $options = []) : void
  + pretty(\SimpleXMLElement $xml, string $nodename) : string
  + indent(string $string, string $char = ' ', ...) : string
}

note right of Xml::__construct
  Constructor

  since: 3.2.0
end note

note left of Xml::get
  get the field xml

  since: 3.2.0
  return: ?\SimpleXMLElement
end note

note right of Xml::append
  xmlAppend
or a stdClass object containing a comment attribute to be injected
before the XML node and a fieldXML attribute containing a SimpleXMLElement

  since: 3.2.0
  return: void
end note

note left of Xml::comment
  xmlComment

  since: 3.2.0
  return: void
end note

note right of Xml::attributes
  xmlAddAttributes

  since: 3.2.0
  return: void
end note

note left of Xml::options
  xmlAddOptions

  since: 3.2.0
  return: void
end note

note right of Xml::pretty
  XML Pretty Print

  since: 3.2.0
  return: string
end note

note left of Xml::indent
  xmlIndent

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    string $char = ' '
    int $depth
    bool $skipfirst = false
    bool $skiplast = false
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

