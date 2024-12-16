```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Url (Details)
> namespace: **VDM\Joomla\Componentbuilder\Network**

```uml
@startuml
class Url << (F,LightGreen) >> #RoyalBlue {
  # ParsedUrls $parsedurls
  + __construct(ParsedUrls $parsedurls)
  + parse(string $url) : object
  + base(string $url) : string
  + equal(string $url1, string $url2) : bool
  + equalStrict(string $url1, string $url2) : bool
  + equalRepo(string $url1, string $url2) : bool
  - compare(string $url1, string $url2, ...) : bool
}

note right of Url::__construct
  Constructor.

  since: 5.0.4
end note

note right of Url::parse
  Parses a URL and extracts the domain, organization, and repository.
This method takes a URL of the format 'https://[domain]/[organization]/[repository]'
and returns an associative array with keys 'domain', 'organization', and 'repository'.

  since: 5.0.4
  return: object
end note

note right of Url::base
  Extract the base domain from a given URL or domain string.

  since: 5.0.4
  return: string
end note

note right of Url::equal
  Compares two URLs and checks if their domain and repository are the same.
This method returns true if both the domain and repository are identical in both URLs.

  since: 5.0.4
  return: bool
end note

note right of Url::equalStrict
  Compares two URLs strictly and checks if their domain, organization, and repository are the same.
This method returns true if the domain, organization, and repository are identical in both URLs.

  since: 5.0.4
  return: bool
end note

note right of Url::equalRepo
  Compares two URLs and checks if their repositories are the same.
This method returns true if the repository names are identical in both URLs, regardless of domain and organization.

  since: 5.0.4
  return: bool
end note

note right of Url::compare
  Compares two URLs based on specified fields.
This method allows you to compare specific components of two URLs, such as 'domain',
'organization', and 'repository'. It returns true if all specified fields are equal.
or if an invalid field is specified.

  since: 5.0.4
  return: bool
  
  arguments:
    string $url1
    string $url2
    array $fields
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---286f7550_9c22_401c_9e5a_2f9426888133---Power
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

