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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---f6ba34a2_0cd7_4dc1_ab67_75e962a5045b---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

