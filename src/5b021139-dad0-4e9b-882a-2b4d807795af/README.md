```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Selection (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Dynamicget**

```uml
@startuml
class Selection  #Gold {
  # array $name
  # Config $config
  # GetAsLookup $getaslookup
  # SiteFields $sitefields
  # $db
  + __construct(Config $config, GetAsLookup $getaslookup, ...)
  + get(string $methodKey, string $viewCode, ...) : ?array
  # name(mixed $value) : string
}

note right of Selection::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    GetAsLookup $getaslookup
    SiteFields $sitefields
end note

note right of Selection::get
  Get Data Selection of the dynamic get

  since: 3.2.0
  return: ?array
  
  arguments:
    string $methodKey
    string $viewCode
    string $string
    string $asset
    string $as
    string $type
    ?int $rowType = null
end note

note right of Selection::name
  Get the Admin view table name

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
Super---5b021139_dad0_4e9b_882a_2b4d807795af---Power
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

