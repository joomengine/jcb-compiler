```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Infusion (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**

```uml
@startuml
class Infusion << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Power $power
  # Content $content
  # Contents $contents
  # Parser $parser
  # ItemReadme $itemreadme
  # MainReadme $mainreadme
  # Placeholder $placeholder
  # Event $event
  # array $linker
  # array $done
  + __construct(Config $config, Power $power, ...)
  + set() : void
  - parsePowers() : void
  - setSuperPowers() : void
  - mergePowers($powers, $old) : void
  - sortPowers($powers) : void
  - setPowers() : void
  - index(array $powers) : string
  - code(object $power) : string
  - raw(object $power) : string
  - linker(object $power) : string
}

note right of Infusion::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Power $power
    Content $content
    Contents $contents
    Parser $parser
    ItemReadme $itemreadme
    MainReadme $mainreadme
    Placeholder $placeholder
    Event $event
end note

note left of Infusion::set
  Infuse the powers data with the content

  since: 3.2.0
  return: void
end note

note right of Infusion::parsePowers
  We parse the powers to get the class map of all methods

  since: 3.2.0
  return: void
end note

note left of Infusion::setSuperPowers
  Set the Super Powers details

  since: 3.2.0
  return: void
end note

note right of Infusion::mergePowers
  Merge the old missing powers found in local repository back into the index

  since: 3.2.0
  return: void
end note

note left of Infusion::sortPowers
  Sort Powers

  since: 3.2.0
  return: void
end note

note right of Infusion::setPowers
  Set the Powers code

  since: 3.2.0
  return: void
end note

note left of Infusion::index
  Build the Super Power Index

  since: 3.2.0
  return: string
end note

note right of Infusion::code
  Get the Power code

  since: 3.2.0
  return: string
end note

note left of Infusion::raw
  Get the Raw (unchanged) Power code

  since: 3.2.0
  return: string
end note

note right of Infusion::linker
  Get the Power Linker

  since: 3.2.0
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---0419081e_4cb3_4c65_8c6a_ffe941fb0f1c---Power
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

